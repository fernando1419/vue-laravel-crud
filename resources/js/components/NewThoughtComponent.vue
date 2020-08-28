<template>
    <div class="card">
        <div class="card-header">En que estás pensando ahora?</div>

        <div class="card-body">
            <!-- @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif -->

            <form action="" method="post">
                <div class="form-group">
                    <label for="thought">Ahora estoy pensando en:</label>
                    <input type="text" name="thought" id="thought" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Enviar Pensamiento</button>
            </form>
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
