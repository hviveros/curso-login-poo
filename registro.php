<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- custom css  -->
        <link rel="stylesheet" href="public/css/registro.css">

        <title>Registro de usuarios</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarse</h5>
                    <form method="post" action="./servidor/registro/registrar.php">

                    <div class="form-floating mb-3">
                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="usuario" autofocus required>
                        <label for="usuario">Usuario</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" name="password_confirm" class="form-control" id="passwordConfirm" placeholder="Confirm Password">
                        <label for="passwordConfirm">Confirmar Password</label>
                    </div>

                    <div class="d-grid mb-2">
                        <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button>
                    </div>

                    <a class="d-block text-center mt-2 small" href="index.php">Tienes una cuenta? Inicia sesión</a>

                    <hr class="my-4">

                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>

    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>