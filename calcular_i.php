<?php
require_once("config.php");
if(isset($_POST['i_s_calcular'])){

    if(
        isset($_POST['i_s_moneda'], 
             $_POST['i_s_capital_i'], 
             $_POST['i_s_tasa_i'], 
             $_POST['i_s_frecuencia_tasa'], 
             $_POST['i_s_tiempo'], 
             $_POST['i_s_frecuencia_tiempo'],
             )
    ){
            
        if(
            $_POST['i_s_moneda']!=="" &&
            $_POST['i_s_capital_i']!=="" &&
            $_POST['i_s_tasa_i']!=="" &&
            $_POST['i_s_frecuencia_tasa']!=="" &&
            $_POST['i_s_tiempo']!=="" &&
            $_POST['i_s_frecuencia_tiempo']!==""
        ){

            $moneda = $_POST['i_s_moneda'];

            $capital = $_POST['i_s_capital_i'];

            $tasa_i = $_POST['i_s_tasa_i'];

            $tasa_i_frecuencia = $_POST['i_s_frecuencia_tasa'];

            $tiempo = $_POST['i_s_tiempo'];

            $tiempo_frecuencia = $_POST['i_s_frecuencia_tiempo'];


            $calculador = new Calculadora();
            $datos = $calculador->Calcular_i_s($moneda,$capital,$tasa_i,$tasa_i_frecuencia,$tiempo,$tiempo_frecuencia);




         }else {
            $status = "ERR_VARIABLES";

            header("Location:interes_simple.php?status=$status");
         }   


    }else {
        $status = "ERR_VARIABLES";

        header("Location:interes_simple.php?status=$status");
     }  

}
/*Calcular interes compuesto*/

if(isset($_POST['i_c_calcular'])){

    if(
        isset($_POST['i_c_moneda'], 
             $_POST['i_c_capital_i'], 
             $_POST['i_c_tasa_i'], 
             $_POST['i_c_frecuencia_tasa'], 
             $_POST['i_c_tiempo'], 
             $_POST['i_c_frecuencia_tiempo'],
             )
    ){
            
        if(
            $_POST['i_c_moneda']!=="" &&
            $_POST['i_c_capital_i']!=="" &&
            $_POST['i_c_tasa_i']!=="" &&
            $_POST['i_c_frecuencia_tasa']!=="" &&
            $_POST['i_c_tiempo']!=="" &&
            $_POST['i_c_frecuencia_tiempo']!==""
        ){

            $moneda = $_POST['i_c_moneda'];

            $capital = $_POST['i_c_capital_i'];

            $tasa_i = $_POST['i_c_tasa_i'];

            $tasa_i_frecuencia = $_POST['i_c_frecuencia_tasa'];

            $tiempo = $_POST['i_c_tiempo'];

            $tiempo_frecuencia = $_POST['i_c_frecuencia_tiempo'];


            $calculador = new Calculadora();
            $datos = $calculador->Calcular_i_c($moneda,$capital,$tasa_i,$tasa_i_frecuencia,$tiempo,$tiempo_frecuencia);




         }else {
            $status = "ERR_VARIABLES";

            header("Location:interes_compuesto.php?status=$status");
         }   


    }else {
        $status = "ERR_VARIABLES";

        header("Location:interes_compuesto.php?status=$status");
     }  

}







?>