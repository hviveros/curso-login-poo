<?php

    //cuando se trabaja con sesiones, se debe llamar a esta función
    session_start();

    //traemos la clase Autenticacion
    include "../../clases/Autenticacion.php";

    $usuario    = $_POST['usuario'];
    $password   = $_POST['password'];

    //instancia de la clase Autenticacion
    $Autenticacion = new Autenticacion();

    //método logear que está en Autenticación, devuelve true o false
    if($Autenticacion->logear($usuario, $password)){
        //si devuelve true, va a inicio.php
        header("location:../../inicio.php");
    } else {
        echo "No se pudo logear";
    }

?>