@extends('layouts.app')
@section('title','Create Voluntary')
@section('content')
<!--< ?php $page = 'createVol'; ?>-->
  <div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('voluntary.store')}}" method = "post">
        @csrf
        <div class="form-group">
          <label for="Nombre">Nombre:</label>
          <input type="text" name = "Nombre" id = "Nombre" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Apellido_1">Apellido 1:</label>
          <input type="text" name = "Apellido_1" id = "Apellido_1" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Apellido_2">Apellido 2:</label>
          <input type="text" name = "Apellido_2" id = "Apellido_2" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Edad">Edad:</label>
          <input type="text" name = "Edad" id = "Edad" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Telefono">Telefono:</label>
          <input type="text" name = "Telefono" id = "Telefono" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Direccion">Dirección:</label>
          <input type="text" name = "Direccion" id = "Direccion" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Email">Email:</label>
          <input type="text" name = "Email" id = "Email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Cantidad">Cantidad:</label>
          <input type="text" name = "Cantidad" id = "Cantidad" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Descripcion">Descripción:</label>
          <input type="text" name = "Descripcion" id = "Descripcion" class="form-control" required>
        </div>


        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection