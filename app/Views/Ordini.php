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
    <?php echo view('Components/Header.php', ['active' => 0]) ?>
    <main class="mx-auto">
        <div class="accordion mx-5" id="ordini">
            <?php
            foreach ($ordini as $ordine) {
                echo view('Components/CardDettaglioOrdine.php', ['ordine' => $ordine]);
            }
            ?>
        </div>
    </main>
    <br>
    <?php echo view('Components/Footer.php') ?>
</body>

</html>