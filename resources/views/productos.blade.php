@extends('layouts.app')

@section('content')

  {{-- comienzo barra de categorias y tags --}}

  <div class="row altura">
    <div class="col-sm-4 col-md-2 nav2 altura">
      <form class="filtros" action="/buscadorproductos" method="post">
        {{ csrf_field() }}

        <div class="">
          <p>Categorias</p>

          <div class="">
            @foreach ($categories as $category)
              <div class="">
                <label for="{{$category->name}}">{{$category->name }}</label>
                <input id="{{$category->name}}" type="checkbox" name="categories[]" value="{{$category->id}}">
              </div>
            @endforeach
          </div>
        </div>



        <div class="">
          <p>Marcas</p>

          @foreach ($brands as $brand)
            <div class="">
              <label for="{{$brand->name}}">{{$brand->name}}</label>
              <input id="{{$brand->name}}" type="checkbox" name="brands[]" value="{{$brand->id}}">
            </div>
          @endforeach
        </div>

        <div class="">
          <p>Tags</p>

          @foreach ($tags as $tag)
            <div class="">
              <label for="{{$tag->name}}">{{$tag->name}}</label>
              <input id="{{$tag->name}}" type="checkbox" name="tags[]" value="{{$tag->id}}">
            </div>
          @endforeach
        </div>

        <input type="submit" name="" value="Buscar">

      </form>
    </div>

    {{-- fin categorias y tags --}}

    {{-- comienzo listado de productos --}}

    <div class="col-sm-8 col-md-10 productos-col-12">

      <div class="">

        @if (count($products) >= 3)

          <div class="row masvendidos sectionproducts">
            @foreach ($destacados as $destacado)
              <div class="col-md-4">
                <figure class="snip1206 col-md-2">
                  <img src="{{$destacado->imagen}}" alt="{{$destacado->name}}">
                  <figcaption>
                  <h2>{{$destacado->name}}</h2>
                  <p>mejor calidad, imposible</p>
                  </figcaption>
                  <a href="#"></a>
                </figure>
              </div>
            @endforeach

          </div>

        @endif



      </div>

      <div class="">
        <form class="buscador" action="/buscar" method="post">
          {{ csrf_field() }}
          <input class="inputElegido" type="text" name="buscador" value="">
          <input type="submit" name="" value="Buscar!">
        </form>
      </div>


      <div class="row productos">

        <div class="row">
          <div class="col-md-12 text-center">
            <h2>PRODUCTOS</h2>
          </div>
        </div>

        @foreach ($products as $product)
          <div class="col-sm-6 col-md-4 col-lg-3 productos-height text-center">
            <div class="">
              <div class="producto-caja-img">
                <img src="{{$product->imagen}}" alt="">
              </div>

              <div class="producto-p">
                <p>{{$product->name}} - ${{$product->precio}}</p>
              </div>
            </div>
            @if (Auth::check())
              <a href="/agregarCarrito/{{$product->id}}">Agregar al carrito</a>
            @endif
          </div>
        @endforeach
      </div>
    </div>
  </div>



@endsection
