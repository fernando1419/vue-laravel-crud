<template>
   <div class="row justify-content-center">
      <div class="col-md-8">
         <new-thought-component @newThoughtEvent="addThought"></new-thought-component> <!-- vue component -->
         <thought-component
               v-for="(thought, index) in thoughts"
               :key="thought.id"
               :thoughtPropFromFather="thought"
               @update="updateThought(index)"
               @delete="deleteThought(index)">
         </thought-component> <!-- vue component -->
      </div>
   </div>
</template>

<script>
   export default {
      data () {
         return {
            thoughts: []
         }
      },
      mounted() {
         axios.get('/api/thoughts')
               .then( response => {
                  // console.log(response.data)
                  this.thoughts = response.data;
               })
               .catch( error => console.log(error) )
      },
      methods: {
         // the component already has the parameter of the event emitted. "thought" was the parameter for this event.
         addThought (data) {
            this.thoughts.unshift(data) // adds element at the beginning of the array.
            // console.log('respondiendo al evento "newThoughtEvent"')
         },
         updateThought(index, thought) {
            this.thoughts[index] = thought
         },
         deleteThought(index) {
            this.thoughts.splice(index, 1);
         }
      }
   }
</script>
