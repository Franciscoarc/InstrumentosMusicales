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
                    <a class="nav-link" href="login.php">Iniciar Sesion</a>
                </li>
                    
              </ul>
                
            </div>
          </div>
        </nav>

            
   <!-- Page Content -->
        <div class="container">

         <div class="row">

        <div class="col-lg-3">

          <h5 class="my-4">Categoria</h5>
          <div class="list-group"  >
              <a href="categoria.php" class="list-group-item">Cuerdas</a>
              <a href="categoria2.php" class="list-group-item">Viento</a>
              <a href="categoria3.php" class="list-group-item">Percusión</a>

          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <img class="d-block img-fluid" src="./Imagenes/image1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="./Imagenes/image2.jpg" alt="Second slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <h3>Instrumentos de cuerda</h3>
              <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="./Imagenes/guitarra1.jpg" alt=""></a>
                    <div class="card-body">
                        <!-- Nombre de Instrumento -->
                      <h4 class="card-title">
                          <a href="mostrar1.php">Guitarra Acústica</a>
                      </h4>
                        
                       <!-- Precio del Instrumento --> 
                      <h5>$34.990</h5>
                      
                      <!--  -->
                      <p class="card-text">La ARCG44 es una guitarra acústica clásica tamaño 4/4 con cuerdas de Nylon, ideal para aquellos que están comenzando a estudiar este instrumento. Maderas de gran calidad que proporcionan una excelente definición en el sonido</p>
                      <button class="btn btn-success">Comprar</button>
                    </div>
                  </div>
                </div>
                  
                                
              </div>
              <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

          </div>
          <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark fixed-bottom">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Diseño APP WEB 2017</p>
          </div>
          <!-- /.container -->
        </footer>
    </body>
</html>
