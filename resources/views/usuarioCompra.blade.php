@extends('layouts.app')
 
@section('usuarioCompra')
<div class="productos" id="productos">

<h1>Mi Compra</h1>

        @if (session('notification')) 
			<div>{{ session('notification') }}</div>
        @endif
		
		@if (session('cartStatus')) 
			<div>{{ session('cartStatus') }}</div>
        @endif
        cartStatus
       	<p>Tu carrito de compras presenta {{ auth()->user()->cart->details->count() }} productos</p>
       	<hr>
        <table class="table">
                <thead>
                    <tr>
                    	<th >Producto</th>
                        <th >Nombre</th>
                        <th >Precio</th>
                        <th >Cantidad</th>
                        <th >SubTotal</th>
                        <th >Opciones</th>
                     </tr>
                     
                </thead>
                <tbody>
                	<hr>
                    @foreach( auth()->user()->cart->details as $detail)
                     <tr>
                        <td>
							<img src="{{ $detail->product->feature_image_url }}" height="50">
                       	</td>
                        <td>
                        	<a href="{{ url('/products/'.$detail->product->id)}}" target="_blank">{{ $detail->product->name }}</a>
                        </td>
                        <td>{{ $detail->product->price }}</td>
                        <td>{{ $detail->quantity}}</td>
                        <td>{{ $detail->quantity * $detail->product->price }}</td>
                        <td>
                    <form method="post" action="{{ url('/cart') }}">
                    	{{ csrf_field() }}
                    	{{ method_field('DELETE') }}
						<input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">

                        <a href="" type="button" rel="tooltip" title="ver Producto" >
                                <i class="fa fa-user"></i>
                        </a>
						<button type="submit" rel="tooltip" title="eliminar Producto" >
                                <i class="fa fa-times"></i>
                        </button>
                        
                        </form>
                            
                        </td>
                    </tr>
                    @endforeach
               </tbody>
            </table>
           <hr>
        <div>
        	<form method="post" action="{{ url ('/order') }}" >
        		{{ csrf_field() }}

           <button type="submit" rel="tooltip" title="Pagar" >
                   <i class="fa fa-done">REALIZAR PEDIDO</i>
           </button>
           </form>

       	</div>
        <br/>
		<br/>
        <hr>
        <br/>
		<br/>
        <br/>
<div>
    @include('prefinal')
</div>
@endsection