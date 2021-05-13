
@extends('layouts.plantilla')
@section('title','Personas para alta en el sistema')
@section('nav')
@include('personas._navegacion')
@endsection
@section('content')
<h1 class="mt-2 text-center">Asignar persona con domicilio</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
{{$ubicacion->pk_cp}}
@foreach ($persona as $person)
{{ $person->pk_persona }}
@endforeach
@endsection