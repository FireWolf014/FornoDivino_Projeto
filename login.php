<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <!-- Incluindo Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #343a40;
            /* Cor de fundo para modo escuro */
            color: #fff;
            /* Cor do texto para modo escuro */
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: #495057;
            /* Cor de fundo do container */
            padding: 20px;
            border-radius: 10px;
        }

        .form-control {
            background-color: #6c757d;
            /* Cor de fundo dos campos do formulário */
            color: #fff;
            /* Cor do texto dos campos do formulário */
        }

        .btn-primary {
            background-color: #007bff;
            /* Cor de fundo do botão Entrar */
            border-color: #007bff;
            /* Cor da borda do botão Entrar */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Cor de fundo do botão Entrar quando hover */
            border-color: #0056b3;
            /* Cor da borda do botão Entrar quando hover */
        }

        .img-background {
            background-image: url(images/bg_1.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh;
            width: 100%;

        }
    </style>
</head>

<body>

    <header>
        <?php include_once("./components/navbar.php");  ?>
    </header>

    <section class="d-flex justify-content-center home-slider">
        <div class="img-background">
            <div class="container-sm login-container opacity-75">
                <h2 class="text-center mb-3 text-warning">Login</h2>
                <form>
                    <div class="mb-4">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-5">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <!-- Button trigger modal -->
                    <div class="mb-5">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Esqueci a senha
                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="container-sm btn btn-outline-warning">Logar</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Incluindo Bootstrap JS e jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>