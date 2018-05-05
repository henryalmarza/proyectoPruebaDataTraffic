<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
	<link href="/css/lib.css" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
	<div class="jumbotron">
		<h1>{{ $tienda{0}{'nombre'} }} </h1>
		<p>{{ $tienda{0}{'direccion'} }}</p>
		<p>{{ $tienda{0}{'gerente'} }}</p>
	</div>

	<br/><hr/>

	<input type="button" class="book-action big btn btn-primary" value="Atr&aacute;s" onclick="window.location='{{ route('tiendas.index') }}'">
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>