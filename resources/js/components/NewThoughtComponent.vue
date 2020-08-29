<template>
   <div class="card">
      <div class="card-header">En que estás pensando ahora?</div>

      <div class="card-body">
         <!-- @if (session('status'))
               <div class="alert alert-success" role="alert">
                  {{ session('status') }}
               </div>
         @endif -->

         <form action="" method="post" v-on:submit.prevent="newThought()">
            <div class="form-group">
               <label for="thought">Ahora estoy pensando en:</label>
               <input type="text" name="thought" id="thought" class="form-control" v-model="description">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Enviar Pensamiento</button>
         </form>
      </div>
   </div>
</template>

<script>
   export default {
      data() {
         return {
            description: ''
         }
      },
      methods: {
         newThought() {
            const thought = {
                  id: 500,
                  description: this.description,
                  created_at: '10-01-2020'
            }
            console.log(thought);
            this.$emit('newThoughtEvent', thought) // an event can have any amount of params.
            this.description = ''
         }
      }
   }
</script>
