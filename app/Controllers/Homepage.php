<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function page(): string
    {
        $modelProdotti = model('Prodotti');
        $prodotti = $modelProdotti->getProdottiRecenti(12);
        return view('Homepage', ['prodotti' => $prodotti]);
    }
}
