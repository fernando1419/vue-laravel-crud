<template>
   <div class="card">
      <div class="card-header">Publicado el {{ thoughtPropFromFather.created_at }}</div>
      <div class="card-body">
         <p>{{ thoughtPropFromFather.description }}</p>
      </div>
      <div class="card-footer">
         <button class="btn btn-light btn-sm">Editar</button>
         <button class="btn btn-danger btn-sm">Eliminar</button>
      </div>
   </div>
</template>

<script>
   export default {
      props: ['thoughtPropFromFather']
   }
</script>
