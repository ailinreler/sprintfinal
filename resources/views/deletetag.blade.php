@extends('layouts.app')

@section('content')

  <div class="container altura">
    <div class="row">
      <div class="col-md-12">

        <form class="formulario" action="/deletetag/{{$tags[0]->id}}" method="post">

          {{ csrf_field() }}
          {{ method_field('DELETE') }}

          <div class="form-group">
            <select class="inputElegido" name="tagid">
              @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <input type="submit" name="" value="Eliminar Tag!">
          </div>

        </form>

      </div>
    </div>
  </div>

  <script type="text/javascript">

    function cambiarAction() {
      var formulario = document.querySelector('.formulario');
      var inputElegido = document.querySelector('.inputElegido');
      formulario.setAttribute('action', '/deletetag/' + inputElegido.value);
    }

    document.querySelector('.inputElegido').addEventListener('change', cambiarAction);

  </script>

@endsection
