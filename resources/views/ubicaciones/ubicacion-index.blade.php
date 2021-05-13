@extends('layouts.plantilla')
@section('title','Ubicaciones lista')
@section('nav')
@include('personas._navegacion')
@endsection
@section('content')
<h1 class="mb-4 text-center">Listado de ubicaciones</h1>
<div class="table-responsive">
            <table class="table">
                <thead class="bg-dark">
                    <th class="text-white">Codigo postal</th>
                    <th class="text-white">Acentamiento</th>
                    <th class="text-white">Tipo acentamiento</th>
                    <th class="text-white">Municipio</th>
                    <th class="text-white">Estado</th>
                    <th class="text-white">Ciudad</th>
                </thead>
                    @foreach ($ubicaciones as $item)
                        <tr>                            
                            <th>{{$item->d_codigo}}</th>
                            <th>{{$item->d_acenta}}</th>
                            <th>{{$item->d_tipo_asenta}}</th>
                            <th>{{$item->d_mnpio}}</th>
                            <th>{{$item->d_estado}}</th>
                            <th>{{$item->d_ciudad}}</th>  
                        </tr>
                    @endforeach                
            </table>
            <div class="d-flex justify-content-center">
            {{$ubicaciones->links()}}
            </div>
        </div>
@endsection