<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tela de Login</title>
<!-- Incluindo Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
<style>
    body {
        background-color: #343a40; /* Cor de fundo para modo escuro */
        color: #fff; /* Cor do texto para modo escuro */
    }
    .login-container {
        max-width: 400px;
        margin: 0 auto;
        margin-top: 100px;
        background-color: #495057; /* Cor de fundo do container */
        padding: 20px;
        border-radius: 10px;
    }
    .form-control {
        background-color: #6c757d; /* Cor de fundo dos campos do formulário */
        color: #fff; /* Cor do texto dos campos do formulário */
    }
    .btn-primary {
        background-color: #007bff; /* Cor de fundo do botão Entrar */
        border-color: #007bff; /* Cor da borda do botão Entrar */
    }
    .btn-primary:hover {
        background-color: #0056b3; /* Cor de fundo do botão Entrar quando hover */
        border-color: #0056b3; /* Cor da borda do botão Entrar quando hover */
    }
</style>
</head>
<body>

<header>
			<?php include_once("./components/navbar.php");  ?>
		</header>

<section class="home-slider owl-carousel img"  height: 50%; style="background-image: url(images/bg_1.jpg);">
<div class="container login-container">
    <h2 class="text-center mb-4">Login</h2>
    <form>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </form>
</div>
    </section>

<!-- Incluindo Bootstrap JS e jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
