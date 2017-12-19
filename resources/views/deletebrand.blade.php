@extends('layouts.app')

@section('content')

  <div class="container altura">
    <div class="row">
      <div class="col-md-12">

        <form class="formulario" action="/deletebrand/{{$brands[0]->id}}" method="post">

          {{ csrf_field() }}
          {{ method_field('DELETE') }}

          <div class="form-group">
            <select class="inputElegido" name="">
              @foreach ($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <input type="submit" name="" value="Eliminar!">
          </div>

        </form>

      </div>
    </div>
  </div>

  <script type="text/javascript">

    function cambiarAction() {
      var formulario = document.querySelector('.formulario');
      var inputElegido = document.querySelector('.inputElegido');
      formulario.setAttribute('action', '/deletebrand/' + inputElegido.value);
    }

    document.querySelector('.inputElegido').addEventListener('change', cambiarAction);

  </script>

@endsection
