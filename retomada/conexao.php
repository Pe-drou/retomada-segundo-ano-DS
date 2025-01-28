<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    echo "Falha na conexão: $conn";
} else {
    echo "Conexão completa";
}
?>