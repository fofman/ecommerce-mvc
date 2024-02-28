<?php

namespace App\Models;

use \CodeIgniter\Model;

class Immagini extends Model
{
    protected $table = 'immagini';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'id_prodotto', 'nome_risorsa'];

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

    public function getImmagine($id)
    {
        return $this->find($id);
    }

    public function getImmagineOf($id_prodotto)
    {
        try {
            return $this->where('id_prodotto', $id_prodotto)->find()[0];
        } catch (\Throwable $th) {
            return "https://via.placeholder.com/300";
        }
        
    }

    public function addImmagine($id_prodotto, $nome_risorsa)
    {
        $dati = ['id_prodotto' => $id_prodotto, 'nome_risorsa' => $nome_risorsa];
        return $this->insert($dati);
    }
}
