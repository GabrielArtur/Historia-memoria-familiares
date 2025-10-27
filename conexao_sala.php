<?php
$servername = "10.138.50.13";
$username = "projeto_avare";
$password = "projeto_avare";
$dbname = "projeto_avare";
//grp_7 

// Criar conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>