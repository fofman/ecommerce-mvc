<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $ordine->id ?>" aria-expanded="false" aria-controls="collapseTwo">
            Ordine Nᵒ<?= $ordine->id ?> | Totale: <?= $ordine->costo_totale ?> €
        </button>
    </h2>
    <div id="<?= $ordine->id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <ul>
                <?php
                foreach ($ordine->dettagli as $prodotto) {
                    $spesa=$prodotto->prezzo*$prodotto->quantitativo;
                    echo <<<HTML
                    <li>$prodotto->titolo x $prodotto->quantitativo - $spesa €</li>
                    HTML;
                }
                ?>
            </ul>
        </div>
    </div>
</div>