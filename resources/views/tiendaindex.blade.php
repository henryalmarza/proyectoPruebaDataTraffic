<!DOCTYPE html>
<html>
<head>
  <title>Tiendas</title>
  <link href="/css/lib.css" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
  <h1>Tiendas</h1>
  <h2>Listado de Tiendas</h2>
  <table class="table table-bordered">
    <th>N&uacute;mero</th>
    <th>Nombre</th>
    <th>Direcci&oacute;n</th>
    <th>Gerente</th>
    <th>Acciones</th>
    <tbody>

      @foreach ($tiendas as $i => $tienda)
      <tr>
       <td>{{ $i+1 }}</td>
       <td>{{ $tienda{'nombre'} }}</td>
       <td>{{ $tienda{'direccion'} }}</td>
       <td>{{ $tienda{'gerente'} }}</td>
       <td>
         <form action="/tiendas/{{ $tienda{'_id'} }}" method="POST">
          {{ csrf_field() }}
          <input type="button" class="tienda-action btn btn-primary" value="Ver" onclick="window.location ='{{ route('tiendas.show', ['tienda' => $tienda{'_id'}]) }}'">  
          <input type="button" class="tienda-action btn btn-primary" value="Editar" onclick="window.location ='{{ route('tiendas.edit', ['tienda' => $tienda{'_id'}]) }}'">  
          <input type="hidden" class="tienda-action" name="_method" value="DELETE"/>
          <input type="submit" class="tienda-action btn btn-primary" name="del" value="Eliminar"/>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<hr/>

<input type="button" class="tienda-action big btn btn-success" value="A&ntilde;adir una tienda" onclick="window.location ='{{ route('tiendas.create') }}'">

<input type="button" class="tienda-action big btn btn-primary" value="Men&uacute; principal" onclick="window.location ='/'">

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>