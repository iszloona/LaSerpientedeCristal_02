<?php
include 'conexao.php'; // Certifique-se de que o caminho está correto


session_start();
if (isset($_SESSION['mensagem'])) {
    echo "<p>" . $_SESSION['mensagem'] . "</p>";
    unset($_SESSION['mensagem']);
}

// Consulta SQL para obter reservas
$sql = "SELECT * FROM reservas";
$result = $mysqli->query($sql);

// Inicializa um array para armazenar as reservas
$reservas = [];

if ($result === false) {
    die("Erro na consulta: " . $mysqli->error);
}

// Processa os dados e armazena no array $reservas
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reservas[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil do Cliente</title>
  <style>
    /* Seu estilo CSS mantido aqui */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #F5F5DC;
    }
    .header {
      background-color: #F5F5DC;
      color: #FFFFFF;
      padding: 1rem 0;
    }
    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.8rem;
      font-weight: bold;
      color: #4E3629;
    }
    .nav a {
      font-family: 'Playfair Display', serif;
      font-size: 1.3rem;
      color: #4E3629;
      text-decoration: none;
      margin: 0 1rem;
      font-weight: bold;
      transition: color 0.3s ease;
    }
    .nav a:hover {
      color: #F5F5DC;
    }
    .profile-container {
      max-width: 600px;
      margin: 20px auto;
      background: #ffffff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }
    .profile-header {
      text-align: center;
      padding: 20px;
      background: #A67B5B;
      color: white;
    }
    .profile-picture {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    .profile-header h1 {
      margin: 10px 0 5px;
      font-size: 24px;
    }
    .profile-header p {
      margin: 0;
      font-size: 14px;
    }
    .reservations {
      padding: 20px;
    }
    .reservations h2 {
      margin-bottom: 10px;
      font-size: 20px;
      color: #333;
    }
    .reservation-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .reservation-list li {
      background: #f4f4f4;
      margin-bottom: 10px;
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    .reservation-list h3 {
      margin: 0 0 5px;
      font-size: 18px;
      color: #4E3629;
    }
    .reservation-list p {
      margin: 5px 0;
      font-size: 14px;
      color: #555;
    }
    .btn {
      display: inline-block;
      padding: 10px 15px;
      background-color: #5a4636;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      margin-right: 10px;
    }
    .btn:hover {
      background-color: #d4a373;
      color: #000;
    }
  </style>
</head>
<body>

<header class="header">
    <div class="container">
      <h1 class="logo">La Serpiente de Cristal</h1>
      <nav class="nav">
        <a href="home.php">Inicio</a>
        <a href="reserva_cad.php">Serviços e reserva</a>
      </nav>
    </div>
</header>

<div class="profile-container">
    <div class="profile-header">
      <img src="img/perfil-removebg-preview.png" alt="Foto do Cliente" class="profile-picture">
      <h1>SEU PERFIL</h1>
    </div>
    <div class="reservations">
      <h2>Reservas</h2>
      <ul class="reservation-list">
        <?php if (!empty($reservas)): ?>
            <?php foreach ($reservas as $reserva): ?>
                <li>
                    <h3>Reserva</h3>
                    <p><strong>Check-in:</strong> <?= htmlspecialchars($reserva['data_checkin']) ?></p>
                    <p><strong>Check-out:</strong> <?= htmlspecialchars($reserva['data_checkout']) ?></p>
        
                  
                    <a href="excluir_reserva.php?id=<?= htmlspecialchars($reserva['id']) ?>" class="btn" onclick="return confirm('Tem certeza que deseja excluir esta reserva?');">Excluir</a>

                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhuma reserva encontrada para este cliente.</p>
        <?php endif; ?>
      </ul>
    </div>
</div>
</body>
</html>
