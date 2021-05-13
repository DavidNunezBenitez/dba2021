@extends('layouts.plantilla')
@section('title','Lista personas')
@section('nav')
@include('personas._navegacion')
@endsection
@section('content')
<h1 class="mt-2 text-center">Listado de personas con su domicilio</h1>
<a class="btn btn-success mb-3" href="{{route('personas-domicilio.create')}}">Crear</a>
<div class="table-responsive">
            <table class="table">
                <thead class="bg-dark">
                    <th class="text-white">Calle</th>
                    <th class="text-white">No. ext</th>
                    <th class="text-white">No. int</th>
                    <th class="text-white">Persona</th>
                    <th class="text-white">Domicilio</th>
                    <th class="text-white">Visualizar</th>
                    <th class="text-white">Actualizar</th>
                    <th class="text-white">Eliminar</th>
                </thead>
                    @foreach ($personaDom as $item)
                        <tr>                            
                            <th>{{$item->nombre}}</th>
                            <th>{{$item->apellido_paterno}}</th>
                            <th>{{$item->apellido_materno}}</th>
                            <th>{{$item->sexo}}</th>
                            <th>{{$item->fecha_nacimiento}}</th>
                            <th><a class="btn btn-secondary" href="{{route('personas.show',$item->pk_persona)}}"><li class="fa fa-eye"></li></a></th>
                            <th><a class="btn btn-primary" href="{{route('personas.edit',$item->pk_persona)}}"><li class="fa fa-refresh"></li></a></th>
                            <th>
                                
                                    <button data-toggle="modal" data-target="#deleteModal" data-id="{{$item->pk_persona}}" class="btn btn-danger"><li class="fa fa-trash"></li></button>
                                
                            </th>
                        </tr>
                    @endforeach                
            </table>
            <div class="d-flex justify-content-center">
            {{$personaDom->links()}}
            </div>
        </div>
        <!--Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>¿Estás seguro de eliminar el registro seleccionado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form id="formDelete" action="{{route('personas.destroy',0)}}" data-action="{{route('personas.destroy',0)}}" method="POST">
        @csrf
        @method('DELETE')
        
        <button type="submit" class="btn btn-danger" value="Enviar">Borrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  window.onload = function() {
                $('#deleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var action = $('#formDelete').attr('data-action').slice(0,-1);
                action += id;
                console.log(action);
                $('#formDelete').attr('action',action);
                var modal = $(this);
                modal.find('.modal-title').text('Eliminaras el registro ' + id);
                });
            }
        </script>
@endsection

