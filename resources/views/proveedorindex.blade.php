<!DOCTYPE html>
<html>
<head>
  <title>Proveedores</title>
  <link href="/css/lib.css" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
  <h1>Proveedores</h1>
  <h2>Listado de proveedores</h2>
  <table class="table table-bordered">
    <th>N&uacute;mero</th>
    <th>Nombre</th>
    <th>Direcci&oacute;n</th>
    <th>Tel&eacute;fono</th>
    <th>Acciones</th>
    <tbody>

      @foreach ($proveedores as $i => $proveedor)
      <tr>
       <td>{{ $i+1 }}</td>
       <td>{{ $proveedor{'nombre'} }}</td>
       <td>{{ $proveedor{'direccion'} }}</td>
       <td>{{ $proveedor{'telefono'} }}</td>
       <td>
         <form action="/proveedores/{{ $proveedor{'_id'} }}" method="POST">
          {{ csrf_field() }}
          <input type="button" class="proveedor-action btn btn-primary" value="Ver" onclick="window.location ='{{ route('proveedores.show', ['proveedor' => $proveedor{'_id'}]) }}'">  
          <input type="button" class="proveedor-action btn btn-primary" value="Editar" onclick="window.location ='{{ route('proveedores.edit', ['proveedor' => $proveedor{'_id'}]) }}'">  
          <input type="hidden" class="proveedor-action" name="_method" value="DELETE"/>
          <input type="submit" class="proveedor-action btn btn-primary" name="del" value="Eliminar"/>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<hr/>

<input type="button" class="proveedor-action big btn btn-success" value="A&ntilde;adir un proveedor" onclick="window.location ='{{ route('proveedores.create') }}'">

<input type="button" class="proveedor-action big btn btn-primary" value="Men&uacute; principal" onclick="window.location ='/'">

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>