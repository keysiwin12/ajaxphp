<?php
   include ("conectar.php");
   $con = conectar();
    $nom = $_GET["nombre"];
     $nom;
   $consulta = "SELECT nombre FROM persona";
   $rConsulta = mysqli_query($con,$consulta);
   foreach ($rConsulta as $valores) {
        $nombreData = $valores["nombre"];
        $pos = strpos($nombreData,$nom);      
        $stri = stristr($nombreData,$nom);
        if($stri) {
         echo $nombreData . "<br>";
        } 
     
    //    if($pos === false) {
    //    }
    //    else {
    //     echo $nombreData . "<br>";
    //    }
    }



  
