<?php
$usuario = 'root';
$senha = '1905gigicas';
$database = 'laserpientedecristal_bd';
$host = 'localhost';
$port = '3307';

// Conexão com o banco de dados usando mysqli
$mysqli = new mysqli($host, $usuario, $senha, $database, $port);

if ($mysqli->connect_error) {
    die("Erro ao conectar ao banco de dados (MySQLi): " . $mysqli->connect_error);
}

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Conexão com o banco de dados (PDO) funcionou!";
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados (PDO): " . $e->getMessage());
}
?>
