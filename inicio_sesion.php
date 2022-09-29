<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo1.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1 align="center">Bienvenido al sistema de tutorias</h1>
    <div class="cuadro">
        <form action="validar.php" method="POST" align="center">
            <div class="container">
                <div class="form-info">
                    <div class="info">
                        <h2>Iniciar Sesión</h2>
                        <div class="input-group">
                            <input type="text" placeholder="Usuario" name="usuario" required><br><br>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Contraseña" name="pass" required><br><br>
                        </div>
                        <input type="submit" value="Iniciar sesión" class="btn btn-primary btn-block">
        </form>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>