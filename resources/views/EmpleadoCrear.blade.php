<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{route('empleado.guardar')}}" method="POST">
 

@csrf
    <div>
        <label >nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="nombre">apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
    </div>
    
    <div>
        <label for="nombre">fechaIngreso:</label>
        <input type="date" id="fechaIngreso" name="fechaIngreso" required>
    </div>
    <div>
        <label for="nombre">Salario:</label>
        <input type="int" id="salario" name="salario" step="0.01" >
    </div>
    <button type="submit">salvar Empleado</button>

</form>
    
</body>
</html>