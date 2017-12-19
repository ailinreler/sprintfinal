@extends('layouts.app')

@section('content')

  <div class="container-fluid bg-carrito">
    <div class="row">
      <div class="col-md-3 barra-compra unocarrito text-center">
        <p><a href="#"><span>1 - </span>Carrito</a></p>
      </div>
      <div class="col-md-3 barra-compra doscarrito text-center">
        <p><a href="#"><span>2 - </span>Envio</a></p>
      </div>
      <div class="col-md-3 barra-compra trescarrito text-center">
        <p><a href="#"><span>3 - </span>Pago</a></p>
      </div>
      <div class="col-md-3 barra-compra cuatrocarrito text-center">
        <p><a href="#"><span>4 - </span>Confirmación</a></p>
      </div>
    </div>
  </div>

  <div class="container altura">
    <div class="row">
        <ul class="cart">
          @foreach ($carrito as $cart)

            <li class="col-xs-12 producto-carrito">
              <div class="cartdiv">
              <img class="imagencarrito col-xs-3" src="{{$cart->imagen}}" alt="">
              <p class="col-xs-3">{{$cart->name}}</p>
              <p class="col-xs-3">Precio: ${{$cart->precio}}</p>
              <a class="col-xs-3" href="/eliminarcarrito/{{$cart->id}}">X</a>
              <div class="linea">

              </div>

            </div></li>
          @endforeach
        </ul>

        <div class="row">
          <div class="col-md-12">
            <p class="total">TOTAL
              <strong>${{$total}}</strong>
            </p>
          </div>
        </div>
    </div>
  </div>

@endsection
