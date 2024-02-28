<?php

namespace App\Controllers;

class Prodotto extends BaseController
{
    public function page($id): string
    {
        $modelProdotti = model('Prodotti');
        //$modelImmagini = model('Immagini');
        $prodotto = $modelProdotti->getProdotto($id);
        $accessori = $modelProdotti->getAccessori($id);
        //$prodotto->cover = $modelImmagini->getImmagineOf($id);
        /*foreach ($accessori as $accessorio) {
            $accessorio->cover = $modelImmagini->getImmagineOf($accessorio->id);
        }*/
        return view('Prodotto', ['prodotto' => $prodotto, 'accessori' => $accessori]);
    }
}
