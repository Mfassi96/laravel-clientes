@extends('plantillas.plantilla')
@section('titulo','Eliminar usuario')
@section('contenido')
<h1 class="display-1 text-center">¿Esta seguro de que desea eliminar este cliente?</h1>
<div class="alert alert-danger" role="alert">
    <div
        class="table-responsive"
    >
        <table
            class="table table-danger"
        >
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cuit</th>
                    <th>Creado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{$cliente->nombre}}
                    </td>
                    <td>
                        {{$cliente->cuit}}
                    </td>
                    <td>
                        {{$cliente->created_at}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>
<a href="{{route('principal')}}" class="btn btn-secondary"><i class="fa-solid fa-circle-chevron-left"></i> Volver</a>
<form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" class="d-flex no-wrap">
    @csrf
    @method("DELETE")
    <button class="btn btn-danger btn-block btn-lg">ELIMINAR<i class="fa-solid fa-trash-can mx-2" style="color: #2d4267;"></i></button>
  </form>
@endsection