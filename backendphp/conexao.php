<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'usuario');
define('DB_PASSWORD', 'senha');
define('DB_NAME', 'nome_do_banco');

function conectar() {
    $conexao = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    return $conexao;
}


?>
