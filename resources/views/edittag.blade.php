@extends('layouts.app')

@section('content')

  <div class="container altura">
    <div class="row">
      <div class="col-md-12">

        <form class="formulario" action="edittag/{{$tags[0]->id}}" method="post">

          {{ csrf_field() }}
          {{ method_field('PATCH') }}

          <div class="form-group">
            <select class="inputElegido" name="tagid">
              @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="">Nombre del Tag:</label>
            <input type="text" name="name" value="">
          </div>

          <div class="form-group">
            <input type="submit" name="" value="Editar Tag!">
          </div>

        </form>

      </div>
    </div>
  </div>

  <script type="text/javascript">

    function cambiarAction() {
      var formulario = document.querySelector('.formulario');
      var inputElegido = document.querySelector('.inputElegido');
      formulario.setAttribute('action', '/edittag/' + inputElegido.value);
    }

    document.querySelector('.inputElegido').addEventListener('change', cambiarAction);

  </script>

@endsection
