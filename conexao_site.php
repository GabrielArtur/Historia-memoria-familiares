<?php
$servername = "192.99.36.226";
$username = "devtimes_historia_avare";
$password = "Mne0K+bX0ULv";
$dbname = "devtimes_historia_avare";
//grp_7 

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}