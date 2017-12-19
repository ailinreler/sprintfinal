@extends('layouts.app')

@section('content')

  <div class="container altura">
    <div class="row">
      <div class="col-md-12">
        <form class="formulario" action="/deleteuser" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}

          <div class="form-group">
            <select class="inputElegido" name="user">
              @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <input type="submit" name="" value="Eliminar usuario!">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
