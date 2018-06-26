@extends('layouts.app')
 
@section('usuarioCompra')
<div class="productos" id="productos">

	<h1>Se a realizado un nuevo pedido</h1>
	<p>Estos son los datos del cliente que realizo el pedido</p>
	<u> 
		<li>
			<strong>Nombre:</strong>
			{{ $user->nombre }}
		</li>
		<li>
			<strong>Email:</strong>
			{{ $user->email }}
		</li>
		<li>
			<strong>Fecha de Pedido:</strong>
			{{ $cart->order_date }}
		</li>
	</u>
	<hr>
	<p>Detalles del Pedido:</p>
	<ul>
		@foreach( $cart->details as $detalle)
		<li> {{ $detalle->product->name }} x {{ $detalle->quantity }} ($ {{ $detalle->quantity * $detalle->product->price }})</li>
		@endforeach
	</ul>
	<p> <strong>Importe a pagar: </strong> {{ $cart->total}}</p>
	<hr>
</div>
<div>
    @include('prefinal')
</div>
@endsection