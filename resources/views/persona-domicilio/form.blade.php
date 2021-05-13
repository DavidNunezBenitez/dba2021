@csrf
      <div class="row g-3">
        <div class="col-12">
          <label for="nombre" class="form-label">Codigo postal:</label>
          <input type="number" class="form-control" name="search" id="search" placeholder="Ingresa tu codigo..." value="{{old('search')}}">
          @error('search')
              <small class="danger alert-danger">*{{$message}}</small>
          @enderror
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-gold mt-4">Enviar</button>
      </div>