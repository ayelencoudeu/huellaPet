<html>
<head>
	<title>Nuevo Pedido</title>
</head>
<body>
	<p>Se a realizado un nuevo pedido</p>
	<p>Estos son los datos del cliente que realizo el pedido</p>
	<u> 
		<li>
			<strong>Nombre:</strong>
			{{ $user->name }}
		</li>
		<li>
			<strong>E:mail:</strong>
			{{ $user->email }}
		</li>
		<li>
			<strong>Fecha de Pedido:</strong>
			{{ $cart->date }}
		</li>

	</u>
	<p><a href="{{ url('/admin/orders/'.$cart->id ) }}">Haz Clic aquí</a> para ver mas info</p>
</body>
</html>