<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{route('productos.guardar')}}" method="POST">
    
@csrf
    <div>
        <label for="nombre">descripcion:</label>
        <input type="text" id="descripcion" name="descripcion" required>
    </div>
    
    
    <div>
        <label for="nombre">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01"required>
    </div>
    
    <div>
        <label for="nombre">stock:</label>
        <input type="number" id="stock" name="stock" required>
    
    
    
    </div>
    
    
    <div>
        <label for="nombre">pagaisv:</label>
        <input type="checkbox" id="pagaisv" name="pagaisv" value=true >
    </div>
    
    
    <button type="submit">salvar producto</button>

</form>
    
</body>
</html>