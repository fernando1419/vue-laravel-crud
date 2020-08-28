@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">En que estás pensando ahora?</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="thought">Ahora estoy pensando en:</label>
                            <input type="text" name="thought" id="thought">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Enviar Pensamiento</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Publicado en 10/12/2020</div>

                <div class="card-body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus aspernatur doloremque sit quas inventore?
                    Tenetur cum corrupti voluptate dolore? Impedit esse reiciendis obcaecati autem! Quibusdam incidunt natus facere
                    quaerat atque!</p>
                </div>

                <div class="card-footer">
                    <button class="btn btn-light btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
