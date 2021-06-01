<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="Respuesta.php" method="POST">
            <div class="form-group">
                <label for="exampleInputName1">Nombres</label>
                <input name="nombre" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="exampleInputName1">Apellidos</label>
                <input name="apellido" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Edad</label>
                <input name="edad" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo Electrónico</label>
                <input name="correo" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Grado</label>
                <input name="grado" type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-info">Enviar</button>
        </form>
    </div>
</body>

</html>