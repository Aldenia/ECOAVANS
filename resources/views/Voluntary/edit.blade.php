@extends('layout')
@section('content')
 <div class="col-sm-8">
 editar cliente
 <a href="{{ route('Voluntary.index')}}" class="btn btn-default pullright">listado</a>
 @include('clientes.fragments.errors')
 {!! Form::model($VoluntaryE, ['route'=>['Voluntary.update', $VoluntaryE-
>id], 'method'=> 'PUT' ]) !!}
 @include('Voluntary.fragments.form')
 {!!Form::close()!!}
 </div>
@endsection 

