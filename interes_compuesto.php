<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap_css/estilos_p.css">
    <link rel="shortcut icon" href="imagenes/logo-unimar.png" type="image/x-icon">
    <title>Interés Compuesto | Calculadora</title>
  </head>
  <body>
  <!--Main, barra de navegación-->
  <?php require_once("calcular_i.php"); ?>
    <main>
        <?php if(isset($_GET['status'])){ $status = $_GET['status']; 
        
        if($status=="ERR_VARIABLES"){?>

      <div class='alert alert-danger alert-dismissible fade show' role='alert' style="margin:0;">
          <strong>Opps!</strong> Ha ocurrido un error... faltan datos para el cálculo !. 
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
       </div>
        <?php
        }
        
        } ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <img src="imagenes/logo-unimar.png" width="30" height="30" class="d-inline-block align-top" alt="">
          </a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
        <a class="nav-link" href="index.php">Documentación <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="interes_simple.php">Interés Simple</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Interés Compuesto</a>
              </li>
            </ul>
            <form action="http://www.google.com/search" class="form-inline my-2 my-lg-0" method="GET">
             <input class="form-control mr-sm-2" type="search" name="q" placeholder="Más información" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
    
    </main>
    <?php
        
        if(isset($_POST['calcular_tiempo'])){
          
          $Ti = $_POST['Ti'];
          $Co = $_POST['Co'];
          $i = $_POST['i'];

          $tiempo_de_i = ($i/($Co*($Ti/100)));

        

        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><h2>Operación Exitosa! </h2></strong> <h3> el valor del tiempo es: <?php echo $tiempo_de_i; ?></h3>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php } ?>


    

  <!--Contenedor desarrollo-->
    <br><br>
    <div class="container-fluid">
    
     <div class="row">

            <div class="col">

                <center><h2>Calculadora de Interés Compuesto</h2></center>

            </div>

     </div>
     <br>
     <div class="row fila-s-2">

            
            <div class="col">

            <h4 class="align-justify text-secondary">
                Cf = Co * (1 + i)^n
            </h4>    
            <br>

            <h6 class="align-justify">
            
                Tanto el capital como los intereses devengados 
                en periodos anteriores generan intereses.
                
                Al final de cada periodo, los intereses ganados
                en el periodo que recién concluye pasan a ser parte 
                del capital y, por consiguiente, generan intereses.

            </h6>

            </div>


     </div>
     <br>
            <!-- Como utilizar-->

            <!-- Boton disparador del modal -->
            <center><button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop">
            Click aquí, para saber cómo funciona
            </button></center>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Interés Compuesto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Te explicamos cómo funciona !. <br><br>
                    
                    Para calcular el interés compuesto se requieren datos como: El capital inicial, porcentaje de la tasa de interés y el tiempo
                    o periodo en el cual se generará cada pago. <br><br>

                    Co = Capital inicial
                    <br>
                    i = Tasa porcentual de interés 
                    <br>
                    n/t = tiempo
                    <br>
                    Cf  = Capital final <br><br>


                    En este sentido le invitamos a utilizar nuestro algoritmo, el cual le permitirá saber de una manera específica y agradable
                    cual será el resultado del capital final que generará su interés. 

                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sKYXzo70mq4?rel=0" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok, entiendo</button>
                </div>
                </div>
            </div>
            </div>

            <br>
              <!--Calcular tiempo-->

              <center><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#staticBackdrop2">
            Calcular el Tiempo
            </button></center>

            <div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Calcula la variable tiempo!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Te explicamos cómo funciona !. <br><br>
                    
                    Existen ocaciones en dónde, nos encontramos con la necesidad de calcular por cuanto tiempo se debe 
                    invertir para generar ciertos intereses. 
                    <br><br>

                    Esto se denota de una manera muy sencilla:
                      <br><br>

                      T = i/Co*Ti

                      <br><br>

                      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    
                          <div class="row">

                            <div class="col">
                            <div class="input-group">
                                    <input type="number" name="Ti" step="0.01" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" min="0" placeholder="Ti" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-percent" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                            </svg>
                                        </span>
                                    </div>
                                  </div>
                            </div>

                            <div class="col">

                                      <div class="input-group">
                                      <input type="number" name="Co" step="0.01" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" min="0" placeholder="Co" required>
                                      <div class="input-group-append">
                                          <span class="input-group-text">
                                          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cash" fill="green" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z"/>
                                            <path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                          </svg>
                                          </span>
                                      </div>
                                      </div>

                            </div>

                            <div class="col">

                            <div class="input-group">
                                      <input type="number" name="i" step="0.01" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" min="0" placeholder="i" required>
                                      <div class="input-group-append">
                                          <span class="input-group-text">
                                          <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cash" fill="orange" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z"/>
                                            <path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                          </svg>
                                          </span>
                                      </div>
                                      </div>

                            </div>

                          </div>       
                              
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-primary" name="calcular_tiempo">Calcular</button>
                          </div>
                    
                      </form>
      
                </div>
                
                </div>
            </div>
            </div>
            <br>

              <!--Formulario-->
            <div class="row">

                    <div class="col-7 fila-s-tabla">
                            <form action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Entradas</th>
                                <th scope="col">Datos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">Tipo de Moneda</th>
                                <td>

                                  <div class="input-group mb-3">
                                    <select class="custom-select" name="i_c_moneda" id="inputGroupSelect02" required>
                                      <option value="" selected disabled hidden>Seleccione la moneda</option>
                                       <option value="$">$. Dollar</option>
                                       <option value="Bs">Bs. Boliviano</option>
                                       <option value="¥">¥. Yuan</option>
                                       <option value="£">£. Libra estarlina</option>
                                       <option value="€">€. Euro</option>
                                       <option value="p">p. Rublo ruso</option>
                                       <option value="Bs F">Bs F. Bolivar Fuerte</option>
                                    </select>
                                    <div class="input-group-append">
                                      <label class="input-group-text" for="inputGroupSelect02">
                                      <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-gem" fill="lightblue" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785l-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004l.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495l5.062-.005L8 13.366 5.47 5.495zm-1.371-.999l-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l2.92-.003 2.193 6.82L1.5 5.5zm7.889 6.817l2.194-6.828 2.929-.003-5.123 6.831z"/>
                                      </svg>
                                      </label>
                                    </div>
                                  </div>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">Capital Inicial</th>
                                <td>
                                    <div class="input-group">
                                    <input type="number" name="i_c_capital_i" step="0.01" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" min="0" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cash" fill="green" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z"/>
                                          <path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                        </svg>
                                        </span>
                                    </div>
                                    </div>
                                </td>
                                </tr>

                                <th scope="row">Tasa de Interés</th>
                                <td>
                                    <div class="input-group">
                                    <input type="number" name="i_c_tasa_i" step="0.01" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" min="0" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-percent" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                              <path fill-rule="evenodd" d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                            </svg>
                                        </span>
                                        <span class="input-group-text">

                                          <select name="i_c_frecuencia_tasa" id="i_c_frecuencia_tasa" required>

                                              <option value="" selected disabled hidden>Frecuencia</option> 
                                              <option value="anos">Anual</option>
                                              <option value="semestres">Semestral</option>
                                              <option value="cuatrimestres">Cuatrimestral</option>
                                              <option value="trimestres">Trimestral</option>
                                              <option value="bimestres">Bimestral</option>
                                              <option value="meses">Mensual</option>
                                              <option value="dias">Diario</option>

                                          </select>

                                        </span>
                                    </div>
                                    </div>
                                </td>
                                </tr>

                                <th scope="row">Tiempo</th>
                                <td>
                                    <div class="input-group">
                                    <input type="number" name="i_c_tiempo" step="0.01" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" min="0" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-calendar-date" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                           <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                           <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                                        </svg>
                                        </span>
                                        <span class="input-group-text">

                                          <select name="i_c_frecuencia_tiempo" id="i_c_frecuencia_tiempo" required>

                                              <option value="" selected disabled hidden>Tiempo</option> 
                                              <option value="anos">Años</option>
                                              <option value="semestres">Semestres</option>
                                              <option value="cuatrimestres">Cuatrimestres</option>
                                              <option value="trimestres">Trimestres</option>
                                              <option value="bimestres">Bimestres</option>
                                              <option value="meses">Meses</option>
                                              <option value="dias">Días</option>

                                          </select>

                                        </span>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                            <center><button class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Calcular" name="i_c_calcular" id="Calcular">Calcular</button></center>
                            <br>
                            </form>

                    </div>

            </div>
            <br>
            <br>
            

            <!--Cuadro cálculado-->
            <?php 

            if(isset($datos)){?>
            
              <center><h3>Resultado</h3></center>
              <br>

                      <div class="row">

                        <div class="col-8 tabla-resultado" style="margin:0 auto;">

                        <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Periodo</th>
                            <th scope="col">Capital Inicial (<?php echo $datos["Moneda"]; ?>)</th>
                            <th scope="col">Intereses (<?php echo $datos["Moneda"]; ?>)</th>
                            <th scope="col">Capital Final (<?php echo $datos["Moneda"]; ?>)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <h5>El Capital Final es: <?php echo number_format($datos['Capital Final'],2) . " " . $datos['Moneda'] ?></h5>
                          <h5>Intereses Generados: <?php echo number_format($datos['Interés'],2) . " " . $datos['Moneda']?></h5>
                          <?php
                          
                          
                          $capital_i = $datos["Capital Inicial"];
                        
                          for ($i=0; $i < $datos["Tiempo"] ; $i++) { 
                            
                          
                          ?>
                          <?php
                          
                          if($i==0){ 
                          ?>

                          <tr>
                            <th scope="row">0</th>
                            <td><?php echo number_format($datos['Capital Inicial'],2) . " " . $datos['Moneda']; ?></td>
                            <td>0,0 <?php echo $datos['Moneda'] ?></td>
                            <td><?php echo number_format($datos['Capital Inicial'],2) . " " . $datos['Moneda']; ?></td>
                          </tr>   

                          <?php

                           }

                          ?>
                          <tr>
                            <th scope="row"><?php echo $i+1; ?></th>
                            <td><?php echo  number_format($datos['Capital Inicial'],2) . " " . $datos['Moneda']; ?></td>
                            <td><?php echo  number_format($datos['Capital Inicial']*$datos['Tasa'],2) . " " . $datos['Moneda']; ?></td>
                            <td><?php echo  number_format($datos['Capital Inicial']+=$datos['Capital Inicial']*$datos['Tasa'],2) . " " . $datos['Moneda']; ?></td>
                          </tr>
                        

                          <?php

                          }
                        

                          ?>


                        </tbody>
                      </table>

                        </div>

                      </div>



            <?php

            }
          
            ?>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



     
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