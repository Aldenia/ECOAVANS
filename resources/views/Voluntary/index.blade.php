@extends('app')
@section('content')
<div class="container">
<div class="row justify-content-center">

    <div class="col-sm-12">
        <h2>
            <br > Listado de voluntarios
<<<<<<< HEAD
           <!-- <a href="{{ route('Voluntary.create') }}" class="btn btn-primary pull-right">nuevo</a>-->
        </h2>
        <div class="row">
    </div>
   <!-- <form action="{{route('Voluntariado.index')}}" method="POST">
    </form>-->
=======
            <a href="{{ route('voluntary.create') }}" class="btn btn-primary pull-right">nuevo</a>
        </h2>
        <div class="row">
    </div>
    <form action="{{route('voluntary.index')}}" method="POST">
    </form>
>>>>>>> 07fcd22438f48684640bfd52f7420c6a7a5ae2e7
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
        @foreach ($voluntary as $Voluntary)
            <tr>
                <td>{{$Voluntary->id}}</td>
                <td>{{$Voluntary->nombre}}</td>
                <td>{{$Voluntary->apellido}}</td>
                <td>{{$Voluntary->apellido}}</td>
                <td>{{$Voluntary->telefono}}</td>
                <td>{{$Voluntary->direccion}}</td> 
                <td>{{$Voluntary->email}}</td>
                <td>{{$Voluntary->descripcion}}</td>

             <!--  <td><a href="{{ route('voluntary.show', $Voluntary->id) }}">ver</a></td> 
               <td><a href="{{ route('voluntary.edit', $Voluntary->id) }}">editar</a></td>
               <td> 
               <form action="{{route('Voluntary.destroy', $Voluntary->id)}}" method='POST'> 
                            {{ csrf_field() }} <input type="hidden" name="_method" value="DELETE"> 
                            <button class="btn btn-link">eliminar</button> </form></td>-->
           </tr>
        @endforeach
    </tbody>
 </table>
 
 {!! $voluntary->render()!!}
 </div>
 </div>
</div>
@endsection
