@extends('layouts.app')

@section('content')

  <div class="container altura">
    <div class="row">
      <div class="col-md-12">
        <form class="formulario" action="/edituser/{{$users[0]->id}}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}

          <div class="form-group">
            <select class="inputElegido" name="">
              @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="">
          </div>

          <div class="form-group">
            <label for="last-name">Apellido:</label>
            <input type="text" name="last-name" value="">
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="">
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" value="">
          </div>

          <div class="form-group">
            <label for="password_confirmation">Confirmar Password:</label>
            <input type="password" name="password_confirmation" value="">
          </div>

          <div class="form-group">
            <label for="tipo_usuario">Tipo de Usuario:</label>
            <select class="" name="typeOfUser">
              <option value="1">Usuario común</option>
              <option value="2">Usuario administrador</option>
            </select>
          </div>

          <div class="form-group">
            <input type="submit" name="" value="Editar Usuario">
          </div>

        </form>
      </div>
    </div>
  </div>


  <script type="text/javascript">

    function cambiarAction() {
      var formulario = document.querySelector('.formulario');
      var inputElegido = document.querySelector('.inputElegido');
      formulario.setAttribute('action', '/edituser/' + inputElegido.value);
    }

    document.querySelector('.inputElegido').addEventListener('change', cambiarAction);

  </script>


@endsection
