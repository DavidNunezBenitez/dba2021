@extends('layouts.plantilla')
@section('title','Personas para alta en el sistema')
@section('nav')
@include('personas._navegacion')
@endsection
@section('content')
<h1 class="mt-2 text-center">Mostrar persona</h1>
    <form class="col-lg-6 offset-lg-3 needs-validation" novalidate action="{{route('personas.index')}}" method="POST">
      @csrf
      <div class="row g-3">
        <div class="col-12">
          <label for="nombre" class="form-label">Nombre:</label>
          <input readonly type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre..." value="{{$persona->nombre}}">
        </div>
        <div class="col-sm-6">
          <label for="apellidoP" class="form-label">Apellido Paterno:</label>
          <input readonly type="text" class="form-control" name="apellidoP" id="apellidoP" placeholder="Apellido paterno..." value="{{$persona->apellido_paterno}}">
        </div>
        <div class="col-sm-6">
          <label for="apellidoM" class="form-label">Apellido Materno:</label>
          <input readonly type="text" class="form-control" name="apellidoM" id="apellidoM" placeholder="Apellido materno..." value="{{$persona->apellido_materno}}">
        </div>
        <div class="col-sm-6">
          Selecciona sexo
          <div class="form-check">
  <input disabled class="form-check-input" id="male" type="radio" name="sexo" {{ (isset($persona) && $persona->sexo == 'M')  ? 'checked="checked"' : '' }} value="M">
  <label class="form-check-label" for="male">
    Masculino
  </label>
</div>
<div class="form-check">
<input disabled class="form-check-input" id="famle" type="radio" name="sexo" {{ (isset($persona) && $persona->sexo == 'F')  ? 'checked="checked"' : '' }} value="F">
  <label class="form-check-label" for="famle">
    Femenino
  </label>
</div>
        </div>
        
        <div class="col-4">
          <label for="date" class="form-label">Fecha de nacimiento</label>
          <input readonly class="form-control" type="date" value="{{$persona->fecha_nacimiento}}" min="1920-01-01" max="2100-12-12" id="date" name="date">
        </div>
      </div>
    </form>
@endsection
