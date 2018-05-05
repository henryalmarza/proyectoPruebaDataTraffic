<!DOCTYPE html>
<html>
<head>
	<title>Proveedor</title>
	<link href="/css/lib.css" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
	<div class="jumbotron">
		<h1>{{ $proveedor{0}{'nombre'} }} </h1>
		<p>{{ $proveedor{0}{'direccion'} }}</p>
		<p>{{ $proveedor{0}{'telefono'} }}</p>
	</div>

	<br/><hr/>

	<input type="button" class="book-action big btn btn-primary" value="Atr&aacute;s" onclick="window.location='{{ route('proveedores.index') }}'">
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>