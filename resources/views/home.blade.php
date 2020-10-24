@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
   <p>Welcome to this beautiful admin panel.</p>
   {{-- <div class="container"> --}}
      <thoughts-list-component />
   {{-- </div> --}}
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
