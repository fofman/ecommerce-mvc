<?php

namespace App\Models;

use \CodeIgniter\Model;

class Prodotti extends Model
{
    protected $table = 'prodotti';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'titolo', 'descrizione', 'prezzo', 'data_aggiunta', 'id_creatore', 'id_prodotto'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'data_aggiunta';
    protected $updatedField  = 'data_aggiunta';
    protected $deletedField  = '';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getProdotto($id)
    {
        return $this->find($id);
    }

    public function addProdotto($titolo, $descrizione, $prezzo, $data_aggiunta, $id_creatore, $id_prodotto)
    {
        $dati = [
            'titolo' => $titolo,
            'descrizione' => $descrizione,
            'prezzo' => $prezzo,
            'data_aggiunta' => $data_aggiunta,
            'id_creatore' => $id_creatore,
            'id_prodotto' => $id_prodotto
        ];
        $this->insert($dati);
    }

    public function getProdottiRecenti($nome)
    {

        return $this->orderBy('data_aggiunta', 'desc')->like('titolo', $nome, 'both')->findAll();
    }

    public function getAccessori($id)
    {
        return $this->where('id_prodotto', $id)->findAll();
    }
}

//https://www.codeigniter.com/user_guide/models/model.html