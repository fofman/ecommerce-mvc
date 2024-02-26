<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/Bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <script src="/Bootstrap/bootstrap.bundle.min.js"></script>


</head>

<body class="d-flex flex-column vh-100">
    <?php echo view('Components/Header.php', ['active' => 1]) ?>
    <main class="container row mx-auto">
        <?php
        foreach ($prodotti as $prodotto) {
            echo view('Components/CardProdotto.php', ['prodotto' => $prodotto]);
        }
        ?>
    </main>
    <?php echo view('Components/Footer.php') ?>
</body>

</html>