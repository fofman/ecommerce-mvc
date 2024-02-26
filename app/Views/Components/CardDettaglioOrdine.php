<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Ordine Nᵒ<?= $ordine->id ?> | Totale: <?= $ordine->costo_totale ?> €
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <ul>
                <?php
                foreach ($ordine->dettagli as $prodotto) {
                    echo <<<HTML
                    <li>$prodotto->titolo x $prodotto-></li>
                    HTML;
                }
                ?>
            </ul>
        </div>
    </div>
</div>