<div class="list-group-item d-flex bg-light p-0 overflow-hidden">
    <form class="h-auto" action="/rimuoviDaCarrello" method="post">
        <button type="submit" name="item" value="<?= $prodotto->id ?>" class="h-100 btn btn-danger rounded-0">
            <i class="bi bi-trash-fill"></i>
        </button>
    </form>
    <label class="form-check-label align-self-center mx-3" for="<?= $prodotto->id ?>" onclick="location.href='/prodotto/<?= $prodotto->id ?>'" style="cursor: pointer;">
        <div>
            <span class="fw-bolder">
                <?= $prodotto->titolo ?>
            </span>
            <span>
                x <?= $prodotto->quantitativo ?>
            </span>

        </div>
        <div>
            <?= $prodotto->prezzo * $prodotto->quantitativo ?> €
        </div>
    </label>
    <div class="align-self-center ms-auto">
        <img src="/cover/<?= $prodotto->id_prodotto ?>" alt="fiorellino" style="width:100px">
    </div>
</div>