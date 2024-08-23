<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>descripcion</th>
            <th>Precio</th>
            <th>stock</th>
            <th>ISV</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($productos as $producto )
        <tr>

            <td>{{ $producto->id }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td>{{ $producto->pagaisv }}</td>
            
        </tr>
        
        @endforeach
  
  
    </tbody>
</table>
  <a    href="{{ route('productos.crear') }}">crear</a>
</body> 
</html>