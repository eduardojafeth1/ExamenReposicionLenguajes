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
            <th>id empleado</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>fecha de ingreso</th>
            <th>salario</th>
    
        </tr>
    </thead>
    
    <tbody>


        @foreach ($empleados as $empleado )
    
        <tr>
            <td>{{ $empleado->id_empleado }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->fechaIngreso }}</td>
            <td>{{ $empleado->salario }}</td>
            
        </tr>
        @endforeach

</tbody>
</table>
    <a    href="{{ route('empleado.crear') }}">crear</a>
</body> 
</html>