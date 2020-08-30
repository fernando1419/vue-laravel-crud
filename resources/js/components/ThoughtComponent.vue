<template>
   <div class="card mb-3">
      <div class="card-header bg-transparent">Publicado el {{ thoughtPropFromFather.created_at }}</div>
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
            this.$emit('delete')
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
               alert('You must enter a valid thought')
               return;
            } else {
               this.editMode = false
               this.$emit('update', thought)
            }
         }
      }
   }
</script>
