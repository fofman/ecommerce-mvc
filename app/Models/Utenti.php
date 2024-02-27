<?php

namespace App\Models;

use \CodeIgniter\Model;

class Utenti extends Model
{
    protected $table = 'utenti';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'nome_utente', 'pw_hash', 'privilegi', 'data_creazione'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'data_creazione';
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

    public function getUtenteById($id)
    {
        return $this->where('id', $id)->find();
    }

    public function getUtenteByNome($nome)
    {
        return $this->where('nome_utente', $nome)->find();
    }

    public function addUtente($nome_utente, $password)
    {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $dati = [
            'nome_utente' => $nome_utente,
            'pw_hash' => $passwordHash
        ];

        try {
            $this->insert($dati);
            return 0;
        } catch (\Throwable $th) {
            return 1; //utente esistente
        }
    }

    public function login($nome_utente, $password)
    {
        $nome_utente = trim($nome_utente);

        try {
            $pwHash = $this->getUtenteByNome($nome_utente)[0]->pw_hash;
        } catch (\Throwable $th) { //utente non trovato
            return 1;
        }
        if (password_verify($password, $pwHash) != true) { //password errata
            return 2;
        } else { //utente esistente e password corretta
            return 0;
        }
    }
}
