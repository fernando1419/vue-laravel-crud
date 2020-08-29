<template>
   <div class="row justify-content-center">
      <div class="col-md-8">
         <new-thought-component @newThoughtEvent="addThought"></new-thought-component> <!-- vue component -->
         <thought-component
               v-for="(thought, index) in thoughts"
               :key="thought.id"
               :thoughtPropFromFather="thought"
               @delete="deleteThought(index)">
         </thought-component> <!-- vue component -->
      </div>
   </div>
</template>

<script>
   export default {
      data () {
         return {
            thoughts: [{
               id: 1,
               description: 'Primer descripcion de un thought para probar',
               created_at: '2020-05-25'
            }]
         }
      },
      methods: {
         // the component already has the parameter of the event emitted. "thought" was the parameter for this event.
         addThought (data) {
            this.thoughts.push(data)
            // console.log('respondiendo al evento "newThoughtEvent"')
         },
         deleteThought (index) {
            this.thoughts.splice(index, 1);
         }
      }
   }
</script>
