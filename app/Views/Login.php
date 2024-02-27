<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/Bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <script src="/Bootstrap/bootstrap.bundle.min.js"></script>
</head>

<body class="align-items-center py-4">
    <main class="w-100 m-auto" style="max-width: 330px;padding: 1rem;">
        <form action="/authLogin" method="post">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating mb-3">
                <input class="form-control" id="floatingInput" name="nome_utente">
                <label for="floatingInput">Nome utente</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>
        <br>
        <div class="text-center">
            Non hai un account? <a href="/register">Registrati qui</a>
        </div>
        <?php
        if ($error) {
            $error = ($error == 1) ? "Utente inesistente" : "La password è errata";
            echo <<<HTML
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <strong>$error</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            HTML;
        }
        ?>
    </main>
</body>

</html>