<?php
$host = "localhost";
$usuario = "root";       // ou o usuário que você criou
$senha = "sua_senha";    // a senha definida no MySQL
$banco = "graficaduque";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Erro na conexão: " . $conn->connect_error);
}
?>
