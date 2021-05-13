@extends('layouts.plantilla')
@section('title','Personas para alta en el sistema')
@section('nav')
@include('personas._navegacion')
@endsection
@section('content')
<h1 class="mt-2 text-center">Crear persona</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <form class="col-lg-6 offset-lg-3 needs-validation" novalidate action="{{route('personas.store')}}" method="POST">
    @include('personas._form')
    </form>
@endsection
