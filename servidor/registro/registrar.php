<?php

    include "../../clases/Autenticacion.php";

    $usuario    = $_POST['usuario'];
    //función password_hash() -> pide una variable y un password por defecto-ver manual
    $password   = password_hash($_POST['password'], PASSWORD_DEFAULT);

    //instancia de la clase Autenticacion
    $Autenticacion = new Autenticacion();

    //método registrar que está en Autenticación, devuelve true o false
    if($Autenticacion->registrar($usuario, $password)){
        //una vez registrado, ir al login que está en index.php
        header("location:../../index.php");
    } else {
        echo "No se pudo registrar";
    }

?>