<?php

    class Conexion {

        public $servidor    = 'localhost';
        public $usuario     = 'root';
        public $password    = '';
        public $basedatos   = 'practical_login_poo';
        // public $puerto      = 3306; //por_defecto

        public function conectar(){
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->password,
                $this->basedatos
                // $this->puerto
            );
        }
    }

?>