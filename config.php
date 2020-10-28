<?php
Class Calculadora{
                                /*Función que calcula el interés simple*/

    public function Calcular_i_s($moneda,$capital,$tasa_i,$tasa_i_frecuencia,$tiempo,$tiempo_frecuencia){


        if($tasa_i_frecuencia==$tiempo_frecuencia){ 

            
            $Cf = ($capital * (1+($tasa_i/100)*$tiempo));
            $interes = round(($Cf-$capital),2);


            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>($tasa_i/100));
           

        }elseif($tiempo_frecuencia=="dias"){

            $Cf = round(($capital * (1+(($tasa_i/100)/365)*$tiempo)),2);

            $interes = round(($Cf-$capital),2);
            

            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/365));

        }elseif($tiempo_frecuencia=="meses"){

            
            $Cf = round(($capital * (1+(($tasa_i/100)/12)*$tiempo)),2);

            $interes = round(($Cf-$capital),2);
            

            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/12));

        }elseif($tiempo_frecuencia=="bimestres"){

           
            $Cf = round(($capital * (1+(($tasa_i/100)/6)*$tiempo)),2);

            $interes = round(($Cf-$capital),2);
            

            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/6));

        }elseif($tiempo_frecuencia=="trimestres"){

            
            $Cf = round(($capital * (1+(($tasa_i/100)/4)*$tiempo)),2);

            $interes = round(($Cf-$capital),2);
            

            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/4));

        }elseif($tiempo_frecuencia=="cuatrimestres"){
 
            $Cf = round(($capital * (1+(($tasa_i/100)/3)*$tiempo)),2);

            $interes = round(($Cf-$capital),2);
            

            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/3));

        }elseif($tiempo_frecuencia=="semestres"){

          
            $Cf = round(($capital * (1+(($tasa_i/100)/2)*$tiempo)),2);

            $interes = round(($Cf-$capital),2);
            

            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/2));

        }elseif($tiempo_frecuencia=="anos"){
 
            $Cf = round(($capital * (1+(($tasa_i/100)/1)*$tiempo)),2);

            $interes = round(($Cf-$capital),2);
            

            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/1));

        }
        

    }



    public function Calcular_i_c($moneda,$capital,$tasa_i,$tasa_i_frecuencia,$tiempo,$tiempo_frecuencia){

        

        if($tasa_i_frecuencia==$tiempo_frecuencia){ 

            
            $Cf = $capital * pow((1+($tasa_i/100)),$tiempo);
            $interes = round(($Cf-$capital),2);

            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>($tasa_i/100));

        }elseif($tiempo_frecuencia=="dias"){
           
           
            $Cf = round($capital * pow((1+(($tasa_i/100)/365)),$tiempo),2);
            $interes = round(($Cf-$capital),2);
            
            
        return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/365));
       
        }elseif($tiempo_frecuencia=="meses"){

           
            $Cf = round($capital * pow((1+(($tasa_i/100)/12)),$tiempo),2);
            $interes = round(($Cf-$capital),2);
            
            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/12));
        }elseif($tiempo_frecuencia=="bimestres"){

          
            $Cf = round($capital * pow((1+(($tasa_i/100)/6)),$tiempo),2);
            $interes = round(($Cf-$capital),2);
            
            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/6));
        }elseif($tiempo_frecuencia=="trimestres"){

           
            $Cf = round($capital * pow((1+(($tasa_i/100)/4)),$tiempo),2);
            $interes = round(($Cf-$capital),2);
            
            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/4));
        }elseif($tiempo_frecuencia=="cuatrimestres"){

            $Cf = round($capital * pow((1+(($tasa_i/100)/3)),$tiempo),2);
            $interes = round(($Cf-$capital),2);
            
            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/3));
        }elseif($tiempo_frecuencia=="semestres"){

            $Cf = round($capital * pow((1+(($tasa_i/100)/2)),$tiempo),2);
            $interes = round(($Cf-$capital),2);
            
            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/2));
        }elseif($tiempo_frecuencia=="anos"){

            $Cf = round($capital * pow((1+(($tasa_i/100)/1)),$tiempo),2);
            $interes = round(($Cf-$capital),2);
            
            return array("Tiempo"=>$tiempo,"Capital Inicial"=>$capital,"Interés"=>$interes,"Capital Final"=>$Cf,"Moneda"=>$moneda,"Tasa"=>(($tasa_i/100)/1));
        }else{
            print_r("Error no se que pasa" . " " . $tiempo_frecuencia);
        }
       
        
    }













}
























?>