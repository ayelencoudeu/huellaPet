@extends('layouts.app')

@section('show')
<div class="productos" >
    <img src="{{ $product->feature_image_url }}">
    @if (session('agregoExito')) 
        <div>{{ session('agregoExito') }}</div>
    @endif
    <div>
        <h2>{{ $product->name }}</h2>
        <h4>{{ $product->category->name }}</h4>
        <h5>${{ $product->price }}</h5>
    </div>
    
    <div >
        <p>{{ $product->long_description }}</p>
    </div>

    <div>
        @foreach($imageMostrar as $muestra)
            <img src="{{ $muestra->url }}" />
        @endforeach
    </div>




    <div class="w3-container">
            <span  class="w3-button w3-display-topright">&times;</span>
        <div>
            <form method="post" action="{{ url('/cart') }}">
                {{ csrf_field() }}
                <div>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <h4 class="modal-title">Cuantos queres?</h4>
                </div>
                <div >
                    <input type="number" value="1" name="quantity"> 
                </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-simple">Cancelar</button>
                    <button type="submit" class="">Añadir</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div>
    @include('prefinal')
</div>
@endsection

