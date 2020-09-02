<template>
   <div class="card mb-3">
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
               <input type="text" name="thought" id="thought" class="form-control form-control-sm" v-model.trim="description">
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
            if (this.description.trim() == '') {
               return alert('You must enter a valid thought')
            }

            const params = {
               description: this.description
            }
            axios.post('/api/thoughts', params)
                  .then( response => {
                     // console.log(response)
                     const thought = response.data
                     this.$emit('newThoughtEvent', thought) // an event can have any amount of params.
                     this.description = ''
                  })
                  .catch( error => console.log(error) )
         }
      }
   }
</script>
