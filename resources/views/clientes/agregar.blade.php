@extends('plantillas.plantilla')
@section('titulo','Registrar Cliente')
@section('contenido')
<form action="{{route('clientes.store')}}" method="post" class="pt-3" style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
    <!-- 2 column grid layout with txt inputs for the first and last names -->
    @csrf
    <div class="row mb-4">
      <div class="col">
        <div data-mdb-input-init class="form-outline">
          <input type="text" id="form3Example1" class="form-control" name="nombre"/>
          <label class="form-label" for="form3Example1">Nombre</label>
        </div>
      </div>


      <div class="col">
        <div data-mdb-input-init class="form-outline">
          <input type="text" placeholder="DNI CUIT" name="tipo" class="form-control" />
          <label class="form-label">TIPO</label>
        </div>
      </div>
    </div>


    <div class="row mb-4">
        <div class="col">
            <select name="tipodoc" class="form-control" >
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
            </select>
            <label>Tipo de documento</label>
          </div>
        </div>
      </div>
  
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="email" id="form3Example3" class="form-control" name="email" />
      <label class="form-label" for="form3Example3">Correo Electronico</label>
    </div>

    <div class="row mb-4">
        <div class="col">
          <div data-mdb-input-init class="form-outline">
            <input type="text"  class="form-control" name="cuit"/>
            <label class="form-label">CUIT</label>
          </div>
        </div>
      </div>
  

  
  
    <!-- Submit button -->
    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Registrar Cliente <i class="fa-solid fa-circle-check"></i></button>
  
 
  </form>
@endsection()
