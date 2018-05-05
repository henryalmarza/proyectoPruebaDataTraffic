<!DOCTYPE html>
<html>
<head><title>Proveedores</title>
	<link href="/css/lib.css" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
	<h1>Proveedores</h1>
	<h2>A&ntilde;adir proveedor</h2>

	<hr/>

	<form action="{{ route('proveedores.store') }}" method="post">

		{{ csrf_field() }}

		<div class="container row"><label for="nombre">Nombre*</label><input type="text" name="nombre" value="" required></div>
		<div class="container row"><label for="direccion">Direcci&oacute;n*</label><input type="text" name="direccion" value="" required></div>
		<div class="container row"><label for="telefono">Tel&eacute;fono*</label><input type="text" name="telefono" value="" required></div>
		<br/><hr/>

		<input type="button" class="proveedor-action big btn btn-primary" value="Cancelar" onclick="window.location='{{ route('proveedores.index') }}'">
		<input type="reset" class="proveedor-action big btn btn-primary" value="Limpiar">
		<input type="submit" class="proveedor-action big btn btn-primary" value="Guardar">

	</form>
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>