@extends('layouts.app')

@section('content')

  <h1 class="home-h1">ELECTRONIC</h1>

  <div class="destacados">

    <div class="row">

      @if (count($products) >= 4)
        @foreach ($destacados as $destacado)
          <div class="col-md-3">
            <figure class="snip1190">
              <img src="{{$destacado->imagen}}" alt="">
              <figcaption>
                <div class="square">
                  <div></div>
                </div>
                <h2>{{$destacado->name}}</h2>
                <p>${{$destacado->precio}}</p>
              </figcaption>
              <a href="/productos"></a>
            </figure>
          </div>
        @endforeach
      @endif


    </div>
  </div>

  <div class="">

    <div class="home">
      <h2 class="home-h2">Lo mejor en tecnología en un solo lugar</h2>
      <button type="button" name="button"><a href="/productos">ver productos!</a></button>
      <img src="\images\iphone2.jpeg" alt="">
    </div>

  </div>



  <div class="">


    <div class="row masvendidos">


      @if (count($products) >= 3)

        <div class="bg-negro">
          <div class="container titulo-masvendidos">
            <div class="row">
              <div class="col-md-12">
                <h2>MÁS VENDIDOS</h2>
              </div>
            </div>
          </div>
        </div>

        @foreach ($destacados2 as $destacado2)
          <div class="col-md-4">
            <figure class="snip1206 col-md-2">
              <img src="{{$destacado2->imagen}}" alt="">
              <figcaption>
              <h2>{{$destacado2->name}}</h2>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
        @endforeach
      @endif

    </div>

  </div>

  <div class="container clientes">
    <div class="row">
      <h2>NUESTROS CLIENTES</h2>

      <div class="col-md-4">
          <figure class="snip1401">
            <img src="\images\cliente2.jpg" />
            <figcaption>
              <h3>Carla Solis</h3>
              <p>Super contenta con mi compra. Todos muy atentos!</p>
            </figcaption><i class="ion-ios-home-outline"></i>
            <a href="#"></a>
          </figure>
      </div>

      <div class="col-md-4">
          <figure class="snip1401">
            <img src="\images\cliente3.jpg" />
            <figcaption>
              <h3>Juan Perez</h3>
              <p>Atención inmejorable</p>
            </figcaption><i class="ion-ios-home-outline"></i>
            <a href="#"></a>
          </figure>
      </div>

      <div class="col-md-4">
          <figure class="snip1401">
            <img src="\images\cliente2.jpg" />
            <figcaption>
              <h3>Carla Solis</h3>
              <p>Volvi a comprar y estoy más contenta que antes</p>
            </figcaption><i class="ion-ios-home-outline"></i>
            <a href="#"></a>
          </figure>
      </div>

    </div>
  </div>

  <script type="text/javascript">

  </script>

@endsection
