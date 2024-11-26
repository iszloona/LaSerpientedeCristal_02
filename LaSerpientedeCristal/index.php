<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <h1 class="logo">La Serpiente de Cristal</h1>
      <form class="login-form" action="#" method="POST">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required>
        
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
        
         <button type="submit" > <a href="home.php"> Entrar  </a></button>
       
      
        <p class="footer-text"> <a href="cliente_cad.php">Ainda não possui uma conta? Cadastre-se</a>
        </p>
    
      </form>
    </div>
  </div>
</body>
</html>
