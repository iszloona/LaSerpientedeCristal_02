<?php
include 'conexao.php'; // Certifique-se de que o caminho está correto

// Verifica se o ID foi fornecido
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Erro: ID da reserva não foi fornecido.");
}

$id = intval($_GET['id']); // Sanitiza o ID para garantir que seja um número

// Consulta para excluir a reserva
$sql = "DELETE FROM reservas WHERE id = $id";
if ($mysqli->query($sql) === true) {
    // Redireciona para a página de perfil após exclusão
    session_start();
//$_SESSION['mensagem'] = "Reserva excluída com sucesso.";
header("Location: perfil_cliente.php");
exit;


} else {
    die("Erro ao excluir a reserva: " . $mysqli->error);
}
?>
