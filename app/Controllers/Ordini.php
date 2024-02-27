<?php

namespace App\Controllers;

class Ordini extends BaseController
{
    public function page()
    {
        if(session()->get('id_utente')==NULL) return redirect()->to('login');
        $modelOrdini = model('Ordini');
        $modelDettagli = model('Dettagli_ordini');
        $modelProdotti = model('Prodotti');
        $ordini = $modelOrdini->getOrdini(session()->get('id_utente'));
        foreach ($ordini as $ordine) {
            $ordine->dettagli = $modelDettagli->getDettagli($ordine->id);
            foreach ($ordine->dettagli as $item) {
                $prodotto = $modelProdotti->getProdotto($item->id_prodotto);
                $item->titolo = $prodotto->titolo;
            }
        }
        return view('Ordini', ['ordini' => $ordini]);
    }
}
