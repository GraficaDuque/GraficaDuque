<?php
$conn = new mysqli("localhost", "root", "", "graficaduque");
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$tipo = $_POST['tipo'];
$data_envio = date('Y-m-d H:i:s');

$sql = "INSERT INTO contatos (nome, email, telefone, mensagem, tipo, data_envio)
        VALUES ('$nome', '$email', '$telefone', '$mensagem', '$tipo', '$data_envio')";

if ($conn->query($sql) === TRUE) {
    echo "Contato enviado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
