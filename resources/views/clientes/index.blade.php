@extends('plantillas.plantilla')
@section('titulo','Resultados de la busqueda')

@section('contenido')

<div class="container">   
  <h1 class="display-1">Resultados de la busqueda</h1>
  <div class="alert alert-success" role="alert">
    <table class="table bg-success">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>factTipo</th>
                <th>CUIT</th>
                <th>Correo Electronico</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->tipo }}</td>
                <td>{{ $cliente->cuit }}</td>
                <td>{{ $cliente->correo_electronico }}</td>
                <td> <a href="{{route('clientes.show',$cliente->id)}}" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  
  <a href="{{route('principal')}}" class="btn btn-secondary">Regresar al listado</a>

    
@endsection()