<?php

class Conexao {

    private $usuario = "u734506267_ctel";
    private $senha = "cartel";
    private $caminho = "mysql.hostinger.com.br";
    private $banco = "u734506267_ctel";
    private $con;

    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
        mysqli_select_db($this->con, $this->banco) or die("Conexão com o banco de dados Falhou!" . mysqli_error($this->con));
    }

    public function getCon() {
        return $this->con;
    }

}
?>


