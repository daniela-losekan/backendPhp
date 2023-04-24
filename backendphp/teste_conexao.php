<?php
include_once 'conexao.php';

$conexao = conectar();

if ($conexao) {
    echo "Conexão realizada com sucesso!";
} else {
    echo "Erro ao conectar: " . mysqli_connect_error();
}
?>
