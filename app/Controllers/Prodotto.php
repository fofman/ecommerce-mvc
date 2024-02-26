<?php

namespace App\Controllers;

class Prodotto extends BaseController
{
    public function page($id): string
    {
        $modelProdotti = model('Prodotti');
        $prodotto = $modelProdotti->getProdotto($id);
        $accessori = $modelProdotti->getAccessori($id);
        return view('Prodotto', ['prodotto' => $prodotto, 'accessori' => $accessori]);
    }
}
