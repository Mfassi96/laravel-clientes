@extends('plantillas/plantilla')
@section('titulo','Listado clientes')
@section('contenido')
@if($mensaje = Session::get('success'))
<script>
    //Swal.fire("Hola mundo");
Swal.fire({
  icon: "success",
  title: "Listo",
  text: "Cliente agregado con exito"
});
</script>

@endif
@if($mensaje = Session::get('eliminado'))
<script>
    
Swal.fire({
  icon: "info",
  title: "Cliente eliminado",
  text: "Un cliente fue eliminado"
});
</script>

@endif

<h1 class="display-1 text-center">Listado de clientes</h1>

  </div>
<table  class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>FactTipo</th>
            <th>CUIT</th>
            <th>Correo Electronico</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>
                {{$cliente->nombre}}  
            </td> 
            <td>
                {{$cliente->tipo}}  
            </td> 
            <td>
                {{$cliente->factipo}}  
            </td> 
            <td>
                {{$cliente->cuit}}  
            </td> 
            <td>
                @if($cliente->correo_electronico)
                <a href="mailto:{{$cliente->correo_electronico}} " class="btn btn-primary" target="_blank"><i class="fa-solid fa-paper-plane"></i></a>
                @else 
                <p class="tex-mutted">No hay registro</p>
                @endif  
            </td> 

            <td>
                <a href="{{route('clientes.show',$cliente->id)}}" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a>
            </td>
        </tr>
        @endforeach

    </tbody>
    <div class="row">
        <div class="col">
          {{ $clientes->links() }}
        </div>
    @endsection()
</table>