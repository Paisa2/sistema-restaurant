@extends('adminlte::page')

@section('title', 'Reserva')

@section('content_header')
    <h1>Reserva</h1>
@stop

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<div class="container w-25 border p-4 mt-4">
    <form action="{{route('reserva')}}" method="POST">
            @csrf
            <div class="mb-3">

                <label for="exampleInputPassword1" class="form-label">Nombre completo</label>
                <input type="name" name="nombreUsuario" class="form-control" id="exampleInputPassword1" >
            
            </div>
            
            <label >Mesa para la reserva</label>
            <select class="form-select" name="numeroMesa"  aria-label="Default select example">
                <option selected>Seleccionar la mesa</option>
                <option value="1">Mesa 1</option>
                <option value="2">Mesa 2</option>
                <option value="3">Mesa 3</option>
                <option value="4">Mesa 4</option>
                <option value="5">Mesa 5</option>
                <option value="6">Mesa 6</option>
                <option value="7">Mesa 7</option>
                <option value="8">Mesa 8</option>
                <option value="9">Mesa 9</option>
                <option value="10">Mesa 10</option>
            </select>
            
            <div class="mb-3">
              <label >Hora de la reserva</label>
                <input type="time" name="hora" class="form-control">
               
            </div>

             <div class="mb-3">
              <label >Fecha de nacimiento</label>
                <input type="date" name="fecha"  class="form-control">
               
            </div>
            

        
        <button type="submit" class="btn btn-primary">Aceptar</button>
   </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop