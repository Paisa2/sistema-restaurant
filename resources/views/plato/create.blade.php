@extends('adminlte::page')

@section('title', 'Restaurant')

@section('content_header')
    <h1>CREAR PLATO NUEVO</h1>
@stop

@section('content')
        
    <form action="/plato" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nmobre</label>
            <input id="nombre" name="nombre" type='text' class="form-control" >
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input id="descripcion" name="descripcion" type='text' class="form-control">
        </div>

        <div class="nb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" type='text' class="form-control" >
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type='number' step="any" value="0,00" class="form-control">
        </div>
        <a href="/plato" class="btn btn-secondary" >Cancelar</a>
        <button type="submit" class="btn btn-primary" >Guardar</button>

    </form>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop