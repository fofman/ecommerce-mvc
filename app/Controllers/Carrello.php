<?php

namespace App\Controllers;

class Carrello extends BaseController
{
    public function page(): string
    {
        $modelCarrelli = model('Carrelli');
        $modelProdotti = model('Prodotti');
        if (session()->get('id_utente') != NULL) {
            $carrello = $modelCarrelli->getCarrello(session()->get('id_utente'));
            $totale = 0;
            foreach ($carrello as $item) {
                $prodotto = $modelProdotti->getProdotto($item->id_prodotto);
                $item->titolo = $prodotto->titolo;
                $item->prezzo = $prodotto->prezzo;
                $totale += $prodotto->prezzo * $item->quantitativo;
            }
            return view(
                'Carrello',
                ['prodotti' => $carrello, 'totale' => $totale]
            );
        } else {
            return redirect()->to('login');
        }
    }

    public function add()
    {
        $id_prodotto = $this->request->getPost('prodotto');
        $quantitativo = $this->request->getPost('quantitativo');
        $modelCarrelli = model('Carrelli');
        if (session()->get('id_utente') != NULL) {
            $modelCarrelli->addProdotto($quantitativo, $id_prodotto, session()->get('id_utente'));
        } else {
            return redirect()->to('login');
        }
        return redirect()->to('carrello');
    }

    public function remove()
    {
        $id_item = $this->request->getPost('item');
        $modelCarrelli = model('Carrelli');
        $item = $modelCarrelli->getItem($id_item);
        if (session()->get('id_utente') == $item->id_utente) {
            $modelCarrelli->removeItem($id_item);
        }
        return redirect()->to('carrello');
    }

    public function checkout()
    {
        $modelProdotti = model('Prodotti');
        $modelCarrelli = model('Carrelli');
        $modelOrdini = model('Ordini');
        $modelDettagli = model('Dettagli_ordini');

        $carrello = $modelCarrelli->getCarrello(session()->get('id_utente'));
        $modelCarrelli->removeCarrello(session()->get('id_utente'));
        $modelOrdini->createOrdine(session()->get('id_utente'), $this->getTotale());
        $id_ordine = $modelOrdini->getLastOrdine(session()->get('id_utente'));
        
        foreach ($carrello as $item) {
            $modelDettagli->addDettaglio($id_ordine, $modelProdotti->getProdotto($item->id_prodotto)->prezzo, $item->quantitativo);
        }
    }

    public function getTotale()
    {
        $modelCarrelli = model('Carrelli');
        $modelProdotti = model('Prodotti');
        $carrello = $modelCarrelli->getCarrello(session()->get('id_utente'));
        $totale = 0;
        foreach ($carrello as $item) {
            $prodotto = $modelProdotti->getProdotto($item->id_prodotto);
            $totale += $prodotto->prezzo * $item->quantitativo;
        }
        return $totale;
    }
}
