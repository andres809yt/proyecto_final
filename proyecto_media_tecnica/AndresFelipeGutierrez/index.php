<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>        
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-primary" role="alert">
                <strong><?= $_SESSION['message']?></strong>
                </div>
            <?php session_unset(); } ?>
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <!--- LOGIN -->
                <form action="consultar.php" method="POST">
                    <div class="mb-4">
                        <label for="Usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="Usuario">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="Ingresar">Iniciar Sesión</button>
                    </div>

                    <div class="my-3">
                        <span>No tienes cuenta <a href="registrar.php">Registrate</a></span><br> 
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>