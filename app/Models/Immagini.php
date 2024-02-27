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

    protected $allowedFields = ['id', 'id_prodotto', 'percorso'];

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
        return $this->where('id_prodotto', $id_prodotto)->findAll();
    }

    public function addImmagine($id_prodotto, $percorso)
    {
        $dati = ['id_prodotto' => $id_prodotto, 'percorso' => $percorso];
        return $this->insert($dati);
    }
}
