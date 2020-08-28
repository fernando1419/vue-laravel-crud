<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <new-thought-component></new-thought-component> <!-- vue component -->
            <thought-component></thought-component> <!-- vue component -->
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
