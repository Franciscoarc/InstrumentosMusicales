<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Instru-Venta</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                    </ul>
                    <ul class=" nav navbar-nav  ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Iniciar Sesion</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>


        <div class="container mt-5">
            <div class=" mr-auto ml-auto col-lg-5">
                <form class="form-signin">
                    <img class="mr-auto ml-auto mb-4" src="Iconos/Inicio Sesion.jpg" alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Registro de Usuarios</h1>
                    <label for="Nombre" class="sr-only">Correo Electrónico</label>
                    <br>
                    <input type="text" id="Nombre" name="nombre" class="form-control" placeholder="Nombre" required autofocus>
                    <br>
                    
                    <label for="correo" class="sr-only">Contraseña</label>
                    <input type="email" id="correo" name="correo" class="form-control" placeholder="Contraseña" required>
                    <br>
                    
                    <label for="nombre" class="sr-only">Contraseña</label>
                    <input type="text" id="nombre" name="contra" class="form-control" placeholder="Contraseña" required>
                    <br>
                    
                    <select>
                        <option value="Algo">Algo</option>
                    </select>
                    <br><br><br><br><br><br>       
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
                    <br>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                </form>
            </div> 

            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $email = $_POST['email'];
                $pass1 = $_POST['passw'];
                $pass2 = $_POST['passw-confirm'];
                if ($pass1 != $pass2) {
                    echo '<div class="alert alert-danger">';
                    echo 'Las contraseñas deben ser iguales';
                    echo '</div>';
                } else {
                    echo create_user($email, $pass1);
                }
            }
            ?>

        </div>
    </body>
</html>
