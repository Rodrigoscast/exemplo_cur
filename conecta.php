<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemavendas";

// Conectar ao servidor MySQL
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Selecionar o banco de dados
mysqli_select_db($conexao, $dbname);
?>