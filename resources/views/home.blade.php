@extends('layouts.app')
 
@section('home')
<div class="contenedorbanner" onclick="contraer(this)">
<div class="banner">
<img src="images/carrusel.png" alt="mascotas">
</div>
 <div class="banneruno">
<img src="images/promouno.png" alt="mascotas">
                    </div>
                    <div class="bannerdos">
                        <img src="images/promodos.png" alt="mascotas">
                    </div>
                </div>
                <div class="productos" id="productos">
                    <h1>PRODUCTOS DEL MES</h1>
                    <hr>
                    <div class="todoslosproductos">
                       @foreach($dato as $datoBase) 
                        <article class="product">
                            <img src=" {{ $datoBase->feature_image_url }}" alt="comida para perro">
                            <h2>
                              <a href="{{ url('/products/'.$datoBase->id) }}">{{ $datoBase->name }}</a>  
                            </h2>
                            <p>{{ $datoBase->description }}</p>
                            <div class="btn-comprar">
                                <a href="{{ url('/products/'.$datoBase->id) }}">Comprar</a>
                            </div>
                        </article>
                        @endforeach
                        
                    </div>
               </div>
               <div>
              {{ $dato->links() }}
              </div>
<div>
    @include('prefinal')
</div>
@endsection


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas Logueado!
                </div>
            </div>
        </div>
    </div>
</div> -->