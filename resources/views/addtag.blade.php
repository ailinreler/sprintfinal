@extends('layouts.app')

@section('content')

  <div class="container altura">
    <div class="row">
      <div class="col-md-12">

        <p>Tags existentes:</p>

        <ul>
          @foreach ($tags as $tag)
            <li>{{$tag->name}}</li>
          @endforeach
        </ul>

        <form class="" action="/addtag" method="post">

          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Nombre del Tag:</label>
            <input type="text" name="name" value="">
          </div>

          <input type="submit" name="" value="Crear Tag!">

        </form>

      </div>
    </div>
  </div>

@endsection
