<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Listado de prestaciones</title>

  </head>
  <body>
    <h2 class="mb-3 text-primary">Prestaciones</h2>
    <table class="table table-bordered mb-5">
	        <thead>
	            <tr>
	                <th scope="col">Id</th>
	                <th scope="col">Tipo</th>
	                <th scope="col">Nombre</th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($data as $row)
	            <tr>
                    <td>{{ $row->id }}</td>
	                <td>{{ $row->tipo }}</td>
	                <td>{{ $row->nombre }}</td>
	            </tr>
	            @endforeach
	        </tbody>
	    </table>
  </body>
</html>
