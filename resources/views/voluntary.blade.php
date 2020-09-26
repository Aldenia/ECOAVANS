@extends('layouts.app')
@section('content')
<?php $page='voluntary';?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Voluntariado</div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th >Nombre</th>
                                <th >Apellido</th>
                                <th >Apellido</th>
                                <th >Telefono</th>
                                <th >Dirección</th>
                                <th >Email</th>
                                <th >Descripción</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection