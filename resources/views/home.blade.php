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

                <form method="get" action="{{url('/search')}}">
                    <input name="pregunta" type="text" value="" placeholder="Buscar" class="form-control"/>
                <button type="submit" id="search">
                    <i clas="material-icons"> buscar</i>
                </button>
                </form>
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

@section('scripts')
    <script type="text/javascript" src="{{ asset('/js/typeahead.bundle.js')}}"></script>
    <script>
    $(function(){
        var states = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.whitespace,
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          // `states` is an array of state names defined in "The Basics"
           prefetch: '{{ url("products/json")}}'
        });

        $('#bloodhound .typeahead').typeahead({
          hint: true,
          highlight: true,
          minLength: 1
        },
        {
          name: 'products',
          source: products
        });

    });
    </script>
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