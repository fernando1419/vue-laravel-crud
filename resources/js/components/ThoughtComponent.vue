<template>
   <div class="card mb-3">
      <div class="card-header bg-transparent">Publicado el {{ thoughtPropFromFather.created_at }}</div>
      <div class="card-body">
         <p>{{ thoughtPropFromFather.description }}</p>
      </div>
      <div class="card-footer">
         <button class="btn btn-light btn-sm">Editar</button>
         <button class="btn btn-danger btn-sm" @click="onDelete"> Eliminar </button>
      </div>
   </div>
</template>

<script>
   export default {
      props: ['thoughtPropFromFather'],
      methods: {
         onDelete () {
            this.$emit('delete')
         }
      }
   }
</script>
