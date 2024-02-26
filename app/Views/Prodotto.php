<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $prodotto->titolo ?></title>
    <link href="/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="/Bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <script src="/Bootstrap/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php echo view('Components/Header.php', ['active' => 0]) ?>
    <br>
    <main class="container">
        <form class="row" method="post" action="/aggiungiAlCarrello">
            <div class="col-md text-center mb-4">
                <img src="https://via.placeholder.com/400" alt="Product Image" class="card-img-top">
            </div>
            <div class="col-lg">
                <h2><?= $prodotto->titolo ?></h2>
                <p><?= $prodotto->descrizione ?></p>
                <?php if (sizeof($accessori) != 0) { ?>
                    <h5>Accessori:</h5>
                    <ul class="list-group col-lg-8 col-md-8">
                        <?php
                        foreach ($accessori as $accessorio) {
                            echo view('Components/CardAccessorio.php', ['prodotto' => $accessorio]);
                        }
                        ?>
                    </ul>
                <?php } ?>
                <br>
                <h5>Quantità:</h5>
                <div class="col-3">
                    <input type="number" min="0" value="1" name="quantitativo" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="prodotto" value="<?=$prodotto->id?>">Aggiungi al carrello</button>
            </div>
        </form>
        <br>
    </main>
    <?php echo view('Components/Footer.php') ?>
</body>

</html>