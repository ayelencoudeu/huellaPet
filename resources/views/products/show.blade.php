@extends('layouts.app')

@section('show')
<div class="productos" >
 <img src="{{ $product->feature_image_url }}" alt="Circle Image" class="img-circle img-responsive img-raised">

<div class="name">
<h2 class="title">{{ $product->name }}</h2>
<h4>{{ $product->category->name }}</h4>
<h5>$ {{ $product->price }}</h5>
</div>
<!-- classic modal -->
    <form method="post" action="{{ url('/cart') }}">
        {{ csrf_field() }}
        <input type="hidden" name="product_id" value= "{{ $product->id }}">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                       
                        <h4 class="modal-title">Cuantos queres?</h4>
                    </div>
                    <div class="modal-body">
                        <input type="number" value="1" name="quantity"> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-simple">Cancelar</button>
                        <button type="submit" class="btn btn-danger btn-simple" data-dismiss="modal">Añadir</button>
                    </div>
                </div>
            </div>
        </div>
        
    </form>    
</div>
</div>
<div class="description text-center">
<p>{{ $product->long_description }}</p>
</div>

<div>

@foreach($imageMostrar as $muestra)
  <img src="{{ $muestra->url }}" />
@endforeach

</div>
<div>
@include('prefinal')
</div>
@endsection
