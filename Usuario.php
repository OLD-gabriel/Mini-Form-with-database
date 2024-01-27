<?php

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

class Usuario{

    private $nome;
    private $email;
    private $idade;
    private $telefone;

    public function __construct($nome, $email, $idade, $telefone){

        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
        $this->telefone = $telefone;
    }
    public function Get_nome(){
        return $this->nome;
    }

    public function Get_idade(){
        return $this->idade;
    }

    public function Get_email(){
        return $this->email;
    }

    public function Get_telefone(){
        return $this->telefone;
    }
}

    $usuario = new Usuario($nome, $email, $idade, $telefone);

    $host = "localhost";
    $user = "root";
    $senha = "";
    $db = "cadastro";

    $conn = new mysqli($host, $user, $senha, $db);

    $sql = "CREATE TABLE IF NOT EXISTS cadastro_EX2(
        nome varchar(255),
        idade int,
        email varchar(255),
        telefone varchar(255)
        )
    ";

    if ($conn->query($sql) === TRUE) {
        $sql_inserir = "INSERT INTO cadastro_ex2 (nome, idade, email, telefone) VALUES ('" . $usuario->Get_nome() . "', '" . $usuario->Get_idade() . "', '" . $usuario->Get_email() . "', '" . $usuario->Get_telefone() . "')";
    
        if ($conn->query($sql_inserir) === TRUE) {
            echo "<script>mostrarPopup()</script>";
            header("location: index.html");
        }
    }
    $conn->close();
