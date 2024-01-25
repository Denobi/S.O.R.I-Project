<?php
// Infos De Caesso ao servidor
define('HOST', 'localhost:3307');
define('USER', 'root');
define('PASS', '');
define('BASE', 'dbclientes');

//String de Conexão
$conn = new mysqli(HOST, USER, PASS, BASE);

//Verificador de Conexão
if ($conn->connect_error) {
    echo "Erro na conexão: " . $conn->connect_error;
}
