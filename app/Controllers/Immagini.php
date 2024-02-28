<?php

namespace App\Controllers;

class Immagini extends BaseController
{
    public function cover($id)
    {
        $modelImmagini = model('Immagini');
        $coverPath = 'img/prodotti/cover/'.$modelImmagini->getImmagineOf($id)->nome_risorsa;
        //$mime=mime_content_type($coverPath);
        return redirect()->to(base_url($coverPath));
    }
}
