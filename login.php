<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Forno divino</title>
    <!-- Incluindo Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="shortcut icon" href="../images/logo.ico">
</head>

<body>

    <header>
        <?php include_once "./components/navbar.php"  ?>
    </header>

    <section class="d-flex justify-content-center home-slider">
        <div class="img-background">
            <div class="container-sm login-container">
                <h2 class="text-center mb-3 text-warning">Login</h2>
                <form>
                    <div class="mb-4">
                        <label for="InputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="InputEmail" require>
                    </div>
                    <div class="mb-5">
                        <label for="InputPassword" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="InputPassword">
                    </div>
                    <a type="button" class="text-warning d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Esqueci a senha!
                    </a>


                    <button type="submit" class="container-sm btn btn-outline-warning mt-5">Logar</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>