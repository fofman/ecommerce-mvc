<div class="list-group-item d-flex justify-content-between bg-light p-0 overflow-hidden" onclick="location.href='/prodotto/<?= $prodotto->id ?>'" style="cursor: pointer;">
    <label class="form-check-label align-self-center mx-3" for="<?= $prodotto->id ?>">
        <div class="fw-bolder">
            <?= $prodotto->titolo ?>
        </div>
        <div>
            <?= $prodotto->prezzo ?> €
        </div>
    </label>
    <div class="align-self-center">
        <img src="/cover/<?= $prodotto->id ?>" alt="" style="width:100px">
    </div>
</div>