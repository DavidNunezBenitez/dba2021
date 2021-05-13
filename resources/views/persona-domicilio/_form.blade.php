@csrf
      <div class="row g-3">
        <div class="col-12">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre..." value="{{old('nombre',$persona->nombre)}}">
          @error('nombre')
              <small class="danger alert-danger">*{{$message}}</small>
          @enderror
        </div>
        <div class="col-sm-6">
        <label for="apellidoP" class="form-label">Apellido paterno:</label>
          <input type="text" class="form-control" name="apellidoP" id="apellidoP" placeholder="Apellido paterno ..." value="{{old('apellidoP',$persona->apellido_paterno)}}">
          @error('apellidoP')
              <small class="danger alert-danger">*{{$message}}</small>
          @enderror
        </div>
        <div class="col-sm-6">
          <label for="apellidoM" class="form-label">Apellido Materno:</label>
          <input type="text" class="form-control" name="apellidoM" id="apellidoM" placeholder="Apellido materno..." value="{{old('apellidoM',$persona->apellido_materno)}}">
          @error('apellidoM')
              <small class="danger alert-danger">*{{$message}}</small>
          @enderror
        </div>
        <div class="col-sm-6">
          Selecciona sexo
          <div class="form-check">
  <input class="form-check-input" type="radio" name="sexo" {{ (isset($persona) && $persona->sexo == 'M')  ? 'checked="checked"' : '' }} id="male" value="M" checked>
  <label class="form-check-label" for="male">
    Masculino
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sexo" {{ (isset($persona) && $persona->sexo == 'F')  ? 'checked="checked"' : '' }} id="famle" value="F">
  <label class="form-check-label" for="famle">
    Femenino
  </label>
</div>
        </div>
        
        <div class="col-4">
          <label for="date" class="form-label">Fecha de nacimiento</label>
          <input class="form-control" type="date" min="1920-01-01" max="2100-12-12" id="date" name="date" value="{{($persona->fecha_nacimiento != null) ? $persona->fecha_nacimiento : '1995-03-02' }}">
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-gold mt-4">Enviar</button>
      </div>