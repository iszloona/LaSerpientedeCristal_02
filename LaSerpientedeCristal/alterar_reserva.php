<?php
include 'conexao.php'; // Certifique-se de que o caminho está correto

// Verifica se o parâmetro 'id' foi passado
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Erro: ID da reserva não foi fornecido.");
}

$id = intval($_GET['id']); // Sanitiza o ID para evitar problemas de segurança

// Consulta para buscar os dados da reserva
$sql = "SELECT * FROM reservas WHERE id = $id";
$result = $mysqli->query($sql);

if ($result === false) {
    die("Erro na consulta: " . $mysqli->error);
}

// Verifica se a reserva existe
$reserva = $result->fetch_assoc();
if (!$reserva) {
    die("Erro: Reserva não encontrada.");
}

// Atualiza os dados se o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data_checkin = $_POST['data_checkin'];
    $data_checkout = $_POST['data_checkout'];
    $tipo_quarto = $_POST['tipo_quarto'];

    $sql = "UPDATE reservas SET 
            data_checkin = '$data_checkin', 
            data_checkout = '$data_checkout', 
            tipo_quarto = '$tipo_quarto'
            WHERE id = $id";

    if ($mysqli->query($sql) === true) {
        header("Location: perfil_cliente.php");
        exit;
    } else {
        echo "Erro ao atualizar: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar Reserva</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #F5F5DC;
      margin: 0;
      padding: 20px;
    }
    .form-container {
      max-width: 600px;
      margin: 0 auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    .form-container h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-container label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .form-container input, .form-container select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-container button {
      width: 100%;
      padding: 10px;
      background-color: #5a4636;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    .form-container button:hover {
      background-color: #d4a373;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h1>Alterar Reserva</h1>
  <form action="" method="POST">
    <label for="data_checkin">Data de Check-in:</label>
    <input type="date" id="data_checkin" name="data_checkin" value="<?= htmlspecialchars($reserva['data_checkin']) ?>" required>
    
    <label for="data_checkout">Data de Check-out:</label>
    <input type="date" id="data_checkout" name="data_checkout" value="<?= htmlspecialchars($reserva['data_checkout']) ?>" required>
    
    <label for="tipo_quarto">Tipo de Quarto:</label>
    <select id="tipo_quarto" name="tipo_quarto" required>
      <option value="Simples" <?= $reserva['tipo_quarto'] == 'Simples' ? 'selected' : '' ?>>Simples</option>
      <option value="Duplo" <?= $reserva['tipo_quarto'] == 'Duplo' ? 'selected' : '' ?>>Duplo</option>
      <option value="Luxo" <?= $reserva['tipo_quarto'] == 'Luxo' ? 'selected' : '' ?>>Luxo</option>
    </select>

    <button type="submit">Salvar Alterações</button>
  </form>
</div>

</body>
</html>
