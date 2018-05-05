<!DOCTYPE html>
<html>
<head><title>Tiendas</title>
	<link href="/css/lib.css" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
	<h1>Tiendas</h1>
	<h2>Editar Tienda</h2>

	<hr/>

	<form action="{{ route('tiendas.update',['id' =>  $tienda{0}{'_id'} ]) }}" method="post">

		{{ csrf_field() }}

		<div class="container row"><label for="nombre">Nombre*</label><input type="text" name="nombre" value="{{ $tienda{0}{'nombre'} }}" required></div>
		<div class="container row"><label for="direccion">Direcci&oacute;n*</label><input type="text" name="direccion" value="{{ $tienda{0}{'direccion'} }}" required></div>
		<div class="container row"><label for="gerente">Gerente*</label><input type="text" name="gerente" value="{{ $tienda{0}{'gerente'} }}" required></div>
		<br/><hr/>

		<input type="button" class="tienda-action big btn btn-primary" value="Cancelar" onclick="window.location='{{ route('tiendas.index') }}'"/>
		<input type="reset" class="tienda-action big btn btn-primary" value="Limpiar" />
		<input type="hidden" name="_method" value="PUT"/>
		<input type="submit" class="tienda-action big btn btn-primary" name="sub" value="Guardar"/>

	</form>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>