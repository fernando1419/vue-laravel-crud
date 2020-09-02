<template>
   <div class="card mb-3">
      <div class="card-header bg-transparent">
         <span> Publicado el {{ thoughtPropFromFather.created_at }} </span>
         <span> - Actualizado el {{ thoughtPropFromFather.updated_at }} </span>
      </div>
      <div class="card-body">
         <input
            v-if="editMode"
            type="text"
            name="description"
            id="description"
            class="form-control form-control-sm"
            ref="description"
            v-model.trim="thoughtPropFromFather.description"
            placeholder="Enter a description for your thought"
            @keyup.enter="onUpdate"
            @keyup.esc="editMode = false">
         <p v-else>{{ thoughtPropFromFather.description }}</p>
      </div>
      <div class="card-footer">
         <button
            class="btn btn-light btn-sm"
            @click="onUpdate"
            v-if="editMode">Guardar cambios</button>
         <button
            class="btn btn-light btn-sm"
            @click="onEdit"
            v-else>Editar</button>
         <button
            v-if="editMode"
            class="btn btn-danger btn-sm"
            @click="onCancel"> Cancelar </button>
         <button
            v-else
            class="btn btn-danger btn-sm"
            @click="onDelete"> Eliminar </button>
      </div>
   </div>
</template>

<script>
   export default {
      props: ['thoughtPropFromFather'],
      data() {
         return {
            editMode: false,
            descriptionBeforeUpdate: ''
         }
      },
      methods: {
         onDelete () {
            if( confirm("Do you really want to delete?") ) {
               axios.delete(`/api/thoughts/${this.thoughtPropFromFather.id}`)
                  .then(() => {
                     this.$emit('delete')
                  }).catch((err) => {
                     console.log(err)
                  });
            }
         },
         onEdit() {
            this.editMode = true
            this.descriptionBeforeUpdate = this.thoughtPropFromFather.description.trim()
            this.$nextTick(() => this.$refs.description.focus())
            // console.log(this.$refs)
         },
         onCancel() {
            this.editMode = false
            this.thoughtPropFromFather.description = this.descriptionBeforeUpdate // discard changes.
         },
         onUpdate() {
            if (this.thoughtPropFromFather.description.trim() == '') {
               return alert('You must enter a valid thought')
            }

            const params = {
               description: this.thoughtPropFromFather.description.trim()
            }
            axios.put(`/api/thoughts/${this.thoughtPropFromFather.id}`, params)
                  .then((response) => {
                     this.editMode = false
                     const thought = response.data
                     this.$emit('update', thought)
                  }).catch((err) => {
                     console.log(err)
                  });
         }
      }
   }
</script>
