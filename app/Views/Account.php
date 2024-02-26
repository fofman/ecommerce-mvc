<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo</title>
    <link href="/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/Bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <script src="/Bootstrap/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php echo view('Components/Header.php', ['active' => 3]) ?>
    <main class="m-2">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Dettagli Profilo Utente</h5>
                            <p class="card-text">ID Utente: <?= $utente->id ?></p>
                            <p class="card-text">Nome Utente: <?= $utente->nome_utente ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="/logout" class="btn btn-primary">Logout</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <a href="/ordini">Cronologia ordini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php echo view('Components/Footer.php') ?>
</body>

</html>