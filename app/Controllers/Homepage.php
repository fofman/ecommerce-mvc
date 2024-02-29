<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function page(): string
    {
        $ricerca = $this->request->getGet('nome');
        $ricerca=(isset($ricerca))?$ricerca:'';
        $modelProdotti = model('Prodotti');
        $prodotti = $modelProdotti->getProdottiRecenti($ricerca);
        return view('Homepage', ['prodotti' => $prodotti]);
    }
}
