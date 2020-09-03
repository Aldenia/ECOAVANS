@extends('layout')
@section('content')
    <div class="col-sm-8">
        <h2>
            <br > Listado de voluntarios
            <a href="{{ route('Voluntary.create') }}" class="btn btn-primary pull-right">nuevo</a>
        </h2>
        <div class="row">
    </div>
    <form action="{{route('Voluntariado.index')}}" method="POST">
    </form>
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
        @foreach ($Voluntary as $voluntary)
            <tr>
                <td>{{$Voluntary->id}}</td>
                <td>{{$Voluntary->nombre}}</td>
                <td>{{$Voluntary->apellido}}</td>
                <td>{{$Voluntary->apellido}}</td>
                <td>{{$Voluntary->telefono}}</td>
                <td>{{$Voluntary->direccion}}</td> 
                <td>{{$Voluntary->email}}</td>
                <td>{{$Voluntary->descripcion}}</td>

            </tr>
        @endforeach
    </tbody>
 </table>
 
 {!! $voluntary->render()!!}
 </div>
@endsection
