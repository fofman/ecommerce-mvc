<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrello</title>
    <link href="/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/Bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <script src="/Bootstrap/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php echo view('Components/Header.php', ['active' => 2]) ?>
    <br>
    <main class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Checkout</h2>
            </div>
            <div class="card-body">
                <h4>Totale: <?= $totale ?> €</h4>
                <br>
                <a href="/checkout" class="btn btn-primary">Conferma ordine</a>
            </div>
        </div>
        <br>
        <div class="list-group col-md-10 col-lg-8 mx-auto">
            <?php
            foreach ($prodotti as $prodotto) {
                echo view('Components/CardCarrello', ['prodotto' => $prodotto]);
            }
            ?>
        </div>
    </main>
    <br>
    <?php echo view('Components/Footer.php') ?>
</body>

</html>