@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2> Ver voluntario</h2>
                        </div>
                        <div class="pull-right">
                            
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $voluntaryB->Nombre }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $voluntaryB->Apellido_1 }}&nbsp;{{ $voluntaryB->Apellido_2 }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $voluntaryB->Edad }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $voluntaryB->Telefono }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $voluntaryB->Direccion }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $voluntaryB->Email }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $voluntaryB->Cantidad }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $voluntaryB->Descripcion }}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection