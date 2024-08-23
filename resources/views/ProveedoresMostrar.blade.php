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
            <th>id Proveedor</th>
            <th>nombre</th>
            <!-- <th>apellido</th> -->
            <th>fecha de Registro</th>
            <th>correo</th>
            <th>telefono</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach ($proveedores as $proveedor )
        <tr>
            <td>{{ $proveedor->id_proveedor }}</td>
            <td>{{ $proveedor->nombre }}</td>
            <td>{{ $proveedor->fechaDeRegistro }}</td>
            <td>{{ $proveedor->correo }}</td>
            <td>{{ $proveedor->telefono }}</td>
            
        </tr>
    
        @endforeach
    
    </tbody>
</table>
    <a    href="{{ route('proveedor.crear') }}">crear</a>
</body> 
</html>