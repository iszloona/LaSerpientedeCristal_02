

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-image: url('img/reservabkg.png');
      background-size: cover;
      color: #333;
    }
        .header {
  background-color: rgba(90, 70, 54, 0.9);
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
color:#F5F5DC;
}

.nav a {
font-family: 'Playfair Display', serif;
font-size: 1.3rem;
color: #F5F5DC;
text-decoration: none;
margin: 0 1rem;
font-weight: bold;
transition: color 0.3s ease;
}

.nav a:hover {
color: #F5F5DC;
}

.booking-container {
      max-width: 800px;
      margin: 2rem auto;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
      padding: 2rem;
    }
    .booking-header {
      background-color: #F5F5DC;
      color: rgba(90, 70, 54, 0.9);
      padding: 1rem;
      text-align: center;
      font-size: 1.2rem;
      font-weight: bold;
    }
    .form-group {
      margin-bottom: 1.5rem;
    }
    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }
    .form-group input,
    .form-group select {
      width: 100%;
      padding: 0.8rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group input:focus,
    .form-group select:focus {
      outline: none;
      border-color: #d4a373;
    }
    .form-group button {
      width: 100%;
      padding: 0.8rem;
      font-size: 1.2rem;
      background-color: #5a4636;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .form-group button:hover {
      background-color: #d4a373;
    }
    footer {
      background-color: rgba(90, 70, 54, 0.9);
      color: #fff;
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      margin-top: 2rem;
    }
    </style>
</head>
<body>
<header class="header">
    <div class="container">
      <h1 class="logo">La Serpiente de Cristal</h1>
      <nav class="nav">
        <a href="sobre.php">Sobre</a>
        <a href="home.php">Inicio</a>
        <a href="perfil_cliente.php">Perfil</a>
      </nav>
    </div>
  </header>

      <div class="booking-container">
        <div class="booking-header">
          RESERVA
          
        </div>
        <div class="booking-form">
        <form class="reserva-form" action="pag_salvar.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar_reserva">

            <div class="form-group">
              <label for="nome">Nome Completo</label>
              <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
  <label for="checkin">Check-In Data</label>
  <input type="date" id="checkin" name="data_checkin" required>
</div>
<div class="form-group">
  <label for="checkout">Check-Out Data</label>
  <input type="date" id="checkout" name="data_checkout" required>
</div>

            <div class="form-group">
              <label for="room">Tipo de quarto</label>
              <select id="room" name="room" required>
                <option value="">Selecione seu quarto</option>
                <option value="suite">Suite</option>
                <option value="deluxe">Deluxe Room</option>
                <option value="standard">Standard Room</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit">Confirmar reserva</button>
            </div>
          </form>
        </div>
      </div>
      <footer>
        &copy; 2024 La Serpiente de Cristal. All rights reserved.
      </footer>
   
</body>
</html>


