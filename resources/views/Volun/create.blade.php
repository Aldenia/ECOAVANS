@extends('layout')
@section('content')
 <div class="col-sm-8">
 <h2>
 Nuevo cliente
 <a href="{{ route('Voluntary.index')}}" class="btn btn-default
pull-right">regresar</a>
 </h2>
 @include('clientes.fragments.errors')
 {!! Form::open(['route'=>'Voluntary.store']) !!}
 @include('Voluntary.fragments.form')
 {!! Form::close() !!}
 </div>

@endsection

