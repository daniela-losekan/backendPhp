<?php


$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$senha_encriptada = password_hash($senha, PASSWORD_DEFAULT);


$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha_encriptada')";
if (mysqli_query($conn, $sql)) {
    echo "Usuário cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

