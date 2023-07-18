<?php

    require "./Conexion.php";

    //extends para tener acceso rápido a la conexión
    class Autenticacion extends Conexion{
        public function registrar($usuario, $password){
            //variable que traiga por herencia el método conectar()
            $conexion = parent::conectar();
            //Query de inserción con sentencias preparadas (?)
            $sql = "INSERT INTO usuarios (usuario, password) VALUES (?,?)";
            //Preparación de la Query $sql
            $query = $conexion->prepare($sql);
            //prepare pide los argumentos, tipo de dato (string) e información
            $query->bind_param('ss', $usuario, $password);
            //Retorna la ejecución de la consulta
            return $query->execute();
        }
    }

?>