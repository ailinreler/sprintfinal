@extends('layouts.app')

@section('content')

  <div class="container altura">
    <div class="row">
      <div class="col-md-12">

        <p>Marcas Existentes:</p>
        <ul>
          @foreach ($brands as $brand)
            <li>{{$brand->name}}</li>
          @endforeach
        </ul>

        <form class="" action="/addbrand" method="post">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Nombre de la Marca:</label>
            <input type="text" name="name" value="">
          </div>

          <div class="form-group">
            <input type="submit" name="submit" value="Añadir!">
          </div>

        </form>
      </div>
    </div>
  </div>

@endsection
