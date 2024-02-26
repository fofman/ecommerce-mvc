<?php

namespace App\Models;

use \CodeIgniter\Model;

class Carrelli extends Model
{
    protected $table = 'carrelli';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'quantitativo', 'id_prodotto', "id_utente"];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = '';
    protected $updatedField  = '';
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

    public function getItem($id)
    {
        return $this->find($id);
    }

    public function removeItem($id)
    {
        return $this->where('id', $id)->delete();
    }

    public function getCarrello($id_utente)
    {
        return $this->where('id_utente', $id_utente)->findAll();
    }

    public function removeCarrello($id_utente)
    {
        return $this->where('id_utente', $id_utente)->delete();
    }

    public function addProdotto($quantitativo, $id_prodotto, $id_utente)
    {
        $dati = [
            'quantitativo' => $quantitativo,
            'id_prodotto' => $id_prodotto,
            'id_utente' => $id_utente
        ];

        $this->insert($dati);
    }
}

// https://www.codeigniter.com/user_guide/database/query_builder.html