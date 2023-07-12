<?php
class Conexion {
    public $servidor = 'localhost'; 
    public $usuario = 'root';
    public $password = '1234';
    public $database = 'login2023';
    public $port = 3308;

    public function conectar(){
        return mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->database,    
            $this->port    
        );
    }
}


?>