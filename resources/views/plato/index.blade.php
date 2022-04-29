@extends('adminlte::page')

@section('title', 'Restaurant')

@section('content_header')
    <h2 class="my-3">LISTAS DE PLATOS </h2>
@stop

@section('content')
<div class="my-5">
  
    <div class="button-create">
        <a href="{{ url('plato/create') }}">
            <button class="btn btn-primary">Generar paltos</button>
        </a>
    </div>

    <table class="table table-dark table-striped mt-4">
        <thead> 
            
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Detalles</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($platos as $plato)
            <tr>
                <th scope="row">{{ @$plato->id }}</th>
                <td>{{ @$plato->name }}</td>
                <td>{{ @$plato->descripcion }}</td>
                <td>{{ @$plato->cantidad }}</td>
                <td>{{ @$plato->precio }}</td>
                <td>             
                        <form action="{{ route('plato.destroy',$plato->id) }}" method="POST">
                        <a href="/plato/{{$plato->id}}/edit" class="btn btn-info">Editar</a> 
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#articulos').DataTable({
            "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
        });
    } );
    </script>
@stop
