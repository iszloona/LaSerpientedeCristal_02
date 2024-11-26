<?php
include("conexao.php");
?>



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
      <form class="login-form" action="pag_salvar.php" method="POST">

        <input type="hidden" name="acao" value="cadastrar">
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>

        <label for="documento">Documento (CPF)</label>
        <input type="text" id="documento" name="documento" placeholder="Digite seu CPF" required>

        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required>

        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Digite sua senha" required>

       
        <button type="submit" > 
          
        Cadastrar</button>
        
       

        
      <p class="footer-text"> <a href="index.php">Já possui uma conta? Login</a>
      </p>
 
      </form>
      
    </div>
  </div>
</body>
</html>
