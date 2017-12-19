@extends('layouts.app')

@section('content')

  <div class="container altura">
    <div class="row">
      <div class="col-md-12">

        <p>Elegir Marca a editar:</p>

        <form class="formulario" action="/editbrand/{{$brands[0]->id}}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}

          <select class="inputElegido" name="">
            @foreach ($brands as $brand)
              <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
          </select>

          <div class="form-group">
            <label for="name">Nuevo nombre:</label>
            <input type="text" name="name" value="">
          </div>

          <div class="form-group">
            <input type="submit" name="" value="Editar!">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">

    function cambiarAction() {
      var formulario = document.querySelector('.formulario');
      var inputElegido = document.querySelector('.inputElegido');
      formulario.setAttribute('action', '/editbrand/' + inputElegido.value);
    }

    document.querySelector('.inputElegido').addEventListener('change', cambiarAction);

  </script>

@endsection
