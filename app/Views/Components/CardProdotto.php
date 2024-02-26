<div class="col-xxl-2 col-lg-3 col-md-4 mb-4 d-flex align-items-stretch flex-fill flex-grow-0">
    <div class="card overflow-hidden flex-fill" onclick="location.href='/prodotto/<?= $prodotto->id ?>'" style="cursor: pointer;">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="<?= $prodotto->titolo ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $prodotto->titolo ?></h5>
            <p class="card-text">A partire da <?= $prodotto->prezzo ?> €</p>
        </div>
    </div>
</div>