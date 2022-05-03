@extends('adminlte::page')

@section('title', 'Restaurante')

@section('content_header')
    <h1>Reservacion</h1>
@stop


@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<div class="container w-25 border p-4 mt-4">
<form >
            @csrf
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mesa</label>
            <select class="form-select" aria-label="Default select example">
                    <option selected>Selecionar la mesa</option>
                    <option value="1">mesa 1</option>
                    <option value="2">mesa 2</option>
                    <option value="3">mesa 3</option>
                    <option value="4">mesa 4</option>
                    <option value="5">mesa 5</option>
                    <option value="6">mesa 6</option>
                    <option value="7">mesa 7</option>
                    <option value="8">mesa 8</option>
                    <option value="9">mesa 9</option>
                    <option value="10">mesa 10</option>
                    <option value="11">mesa 11</option>
                    <option value="12">mesa 12</option>
            </select>
            </div>
            
            
             <div class="mb-3">
              <label for="nacimiento">Hora de la resevacion</label>
                <input type="time" name="fechaNacimiento"class="form-control">
               
            </div>
        
            
            
             <div class="mb-3">
              <label for="nacimiento">Fecha de la resevacion</label>
                <input type="date" name="fechaNacimiento" id="nacimiento"  name="nacimiento"  class="form-control">
               
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