@extends('layouts.plantilla')
@section('title','Edicion de personas')
@section('nav')
@include('personas._navegacion')
@endsection
@section('content')
<h1 class="mt-2 text-center">Edición de persona</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <form class="col-lg-6 offset-lg-3 needs-validation" novalidate action="{{route('personas.update',$persona->pk_persona)}}" method="POST">
    @method('PUT')
    @include('personas._form')
    </form>
@endsection
