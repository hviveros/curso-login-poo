<?php

    require "Conexion.php";

    //extends para tener acceso rápido a la conexión
    class Autenticacion extends Conexion{
        //método registrar()
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

        //método logear
        public function logear($usuario, $password){
            $conexion = parent::conectar();
            $passwordExistente = "";
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
            $respuesta = mysqli_query($conexion, $sql);
            
            if (mysqli_num_rows($respuesta) > 0) {            
                //pide una ejecución de un query
                $passwordExistente = mysqli_fetch_array($respuesta);
                $passwordExistente = $passwordExistente['password'];

                //función que compara passwords con un hash, devuelve true o false
                if (password_verify($password, $passwordExistente)) {
                    //si es true, se crean las variables de sesión
                    $_SESSION['usuario'] = $usuario;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

?>