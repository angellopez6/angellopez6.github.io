<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap_css/estilos_p.css">
    <link rel="shortcut icon" href="imagenes/logo-unimar.png" type="image/x-icon">

    <title>Inicio | Calculadora</title>
  </head>
  <body>
  <!--Main, barra de navegación-->
    <main>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <img src="imagenes/logo-unimar.png" width="30" height="30" class="d-inline-block align-top" alt="">
          </a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
        <a class="nav-link" href="#">Documentación <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="interes_simple.php">Interés Simple</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="interes_compuesto.php">Interés Compuesto</a>
              </li>
            </ul>
            <form action="http://www.google.com/search" class="form-inline my-2 my-lg-0" method="GET">
             <input class="form-control mr-sm-2" type="search" name="q" placeholder="Más información" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
    
    </main>

  <!--Jumbotron-->

    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Universidad de Margarita</h1>
      <p class="lead">Alma Mater del Caribe - Decanado de Ingeniería y Afines - Unidad Curricular: Ingeniería Económica.</p>
      <p>Facilitador: Valentina M.</p>
    </div>
    </div>

  <!--Contenedor desarrollo-->

    <div class="container-fluid">
    
      <div class="row">

        <div class="col">

          <center><h2>¿Economía?</h2></center>
          <br>

          <p class="text-secondary text-justify">Ciencia que estudia los recursos, 
                                    la creación de riqueza y la producción, 
                                    distribución y consumo de bienes y servicios,
                                     para satisfacer las necesidades humanas.
          </p>

        </div>

        <div class="col">

          <img src="imagenes/Economia_imagen1.png" alt="Economía" width="100%">

        </div>

      </div>

      <br><br>

      <div class="row">

        <div class="col">

          <img src="imagenes/interes.png" alt="Interés" width="100%">

        </div>

        <div class="col">

          <center><h2>¿Interés?</h2></center>
          <br>

          <p class="text-secondary text-justify">Es la manifestación del valor del dinero en el tiempo.
                                                 Desde una perspectiva de cálculo, el interés es la diferrencia
                                                 entre una cantidad final de dinero y la cantidad original.
          </p>
          <br>

          <p class="text-secondary text-justify"> - Para el deudor, esa tasa representa el costo del dinero,<br>
                                                    Lo que se debe pagar para compensar la oportunidad de contar
                                                    con el dinero del otro.
                                                    <br><br>
                                                  - Para el acreedor o inversor, esa tasa representa el rendimiento
                                                    del dinero:
                                                    Lo que se puede obtener, producir, ganar por hacer la inversión.
          </p>

        </div>

      </div>

      <br><br>
      <hr>
      <div class="row">


          <div class="col">

              <center><h3>Interés Simple</h3></center>
              <br>
              <center><img src="imagenes/interes_simple.png" alt="Imagen Interés Simple" width="300px"></center>
              <br>

              <p class="text-secondary text-justify">
              El interés simple es la tasa aplicada sobre un capital origen que permanece constante en el tiempo y no se añade a periodos sucesivos. <br><br>
              En otras palabras, el interés simple se calcula para pagos o cobros sobre el capital dispuesto inicialmente en todos los periodos considerados, 
              mientras que el interés compuesto va sumando los intereses al capital para producir nuevos intereses.
              </p>

          </div>

          <div class="col">

              <center><h3>Interés Compuesto</h3></center>
              <br><br>
              <center><img src="imagenes/interes_compuesto.png" alt="Imagen Interés Simple" width="300px"></center>
              <br>
              
              <p class="text-secondary text-justify">
              Se denomina interés compuesto en activos monetarios a aquel que se va sumando al capital inicial y sobre el que se van generando nuevos intereses.
              Los intereses generados se van sumando periodo a periodo al capital inicial y a los intereses ya generados anteriormente. <br><br> De esta forma, 
              se crea valor no sólo sobre el capital inicial sino que los intereses generados previamente ahora se encargar también de generar nuevos intereses. 
              Es decir, se van acumulando los intereses obtenidos para generar más intereses.


              </p>
              

          </div>

      </div>

      <br><br>

      <div class="row footer-1">

         <div class="col bg-dark">
                <br>
                <h5>Realizado por Angel Salazar ©</h5>
                <br>

                <h6>
                Este sitio web fue creado con fines educativos,
                dirigido a la unidad curricular Ingeniería Económica,
                con la estimada profesora: <br>(<cite>Valentina M.</cite>). <br> <br>
                
                Principalmente con la finalidad de implementar un modelo matemático que
                calcule las tasas de interés Simple/Compuesto.
                </h6>
                <br>
                

                <h6>Todos los derechos reservados - Angel Salazar 2020 ©</h6>
                <br>
                <img src="imagenes/logo-unimar.png" alt="" width="60px">
         </div>

      </div>

    </div>


    
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>