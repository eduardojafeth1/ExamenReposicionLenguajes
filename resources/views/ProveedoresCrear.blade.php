<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{route('proveedor.guardar')}}" method="POST">
    
@csrf
    <div>
        <label >nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>

    <div>
        <label for="nombre">fecha De Registro:</label>
        <input type="date" id="fechaDeRegistro" name="fechaDeRegistro" required>

    </div>

    <div>
        <label for="nombre">telefono:</label>
        <input type="text" id="telefono" name="telefono" required>
    </div>
    
    <div>
        <label for="nombre">correo:</label>
        <input type="text" id="correo" name="correo" required>
    </div>
    
 <button type="submit">salvar Empleado</button>

</form>
    
</body>
</html>