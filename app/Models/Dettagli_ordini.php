<?php

namespace App\Models;

use \CodeIgniter\Model;

class Dettagli_ordini extends Model
{
    protected $table = 'dettagli_ordini';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'id_ordine', 'id_prodotto', 'prezzo', 'quantitativo'];

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

    public function getDettagli($id_ordine)
    {
        return $this->where('id_ordine', $id_ordine)->findAll();
    }

    public function addDettaglio($id_ordine, $id_prodotto, $prezzo, $quantitativo)
    {
        $dati = [
            'id_ordine' => $id_ordine,
            'id_prodotto' => $id_prodotto,
            'prezzo' => $prezzo,
            'quantitativo' => $quantitativo
        ];

        $this->insert($dati);
    }
}
