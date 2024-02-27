<?php

namespace App\Models;

use \CodeIgniter\Model;

class Ordini extends Model
{
    protected $table = 'ordini';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'id_utente', 'costo_totale', 'data_ordine'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'data_ordine';
    protected $updatedField  = 'data_ordine';
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

    public function createOrdine($id_utente, $costo_totale)
    {
        $dati = [
            'id_utente' => $id_utente,
            'costo_totale' => $costo_totale,
        ];

        $this->insert($dati);
    }

    public function getOrdini($id)
    {
        return $this->where('id_utente', $id)->orderBy('data_ordine', 'desc')->findAll();
    }

    public function getLastOrdine($id_utente)
    {
        return $this->where('id_utente', $id_utente)->orderBy('data_ordine', 'desc')->limit(1)->find()[0];
    }
}


/*
    public function createOrdine($id_utente, $costo_totale, $data_ordine)
    {
        $dati = [
            'id_utente' => $id_utente,
            'costo_totale' => $costo_totale,
            'data_ordine' => $data_ordine
        ];

        $this->insert($dati);
    }
 */
