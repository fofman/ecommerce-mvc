<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <link href="/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/Bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <script src="/Bootstrap/bootstrap.bundle.min.js"></script>
</head>

<body class="align-items-center py-4">
    <main class="w-100 m-auto" style="max-width: 330px;padding: 1rem;">
        <form action="/authRegister" method="post">
            <h1 class="h3 mb-3 fw-normal">Registrazione</h1>

            <div class="form-floating mb-3">
                <input class="form-control" id="floatingInput" name="nome_utente">
                <label for="floatingInput">Nome utente</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2 danger" type="submit">Registrati</button>
        </form>
        <?php
        if ($error) {
            $error = ($error == 1) ? "Nome utente già esistente" : "";
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