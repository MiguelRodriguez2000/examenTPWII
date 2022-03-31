<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            background: #c2d6d6;
        }
    </style>
</head>
<body>
    <br><br><br>
    <h1><center>Ingresar</center></h1>
    <h2><center>¡¡Bienvenido!!</center></h2>
    <h3><center>Ingrese correctamente sus datos</center></h3>
    <form method="POST" action="../Home/ingresarForm">
        <div>   
        <center>Correo: <input required type="text" name="correo" id="correo"></center>
        <br>
        <center>Contraseña: <input required type="text" name="contra" id="contra"></center>
        <br>
        <center><input type="submit" name="enviar" value="ingresar"></center>
    </form>
    </div>
    <br/><br/>
</body>
</html>