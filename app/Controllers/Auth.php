<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function login(): string
    {
        return view('Login');
    }

    public function account()
    {
        $modelUtenti = model('Utenti');
        if (session()->get('id_utente') != NULL) {
            return view('Account', ['utente' => $modelUtenti->getUtenteById(session()->get('id_utente'))[0]]);
        } else {
            return redirect()->to('login');
        }
    }

    public function authLogin()
    {
        $nome_utente = $this->request->getPost('nome_utente');
        $password = $this->request->getPost('password');
        //AUTENTICAZIONE
        $modelUtenti = model('Utenti');

        $esitoLogin = $modelUtenti->login($nome_utente, $password);
        echo var_dump($esitoLogin);

        switch ($esitoLogin) {
            case 0:
                //login andato a buon fine
                $utente = $modelUtenti->getUtenteByNome($nome_utente)[0];
                $session = session();
                $session->set('id_utente', $utente->id);
                return redirect()->to('/');
                break;
            case 1:
                //utente non trovato
                return redirect()->to('login');
                break;
            case 2:
                //password sbagliata
                return redirect()->to('login');
                break;
        }
    }

    public function register(): string
    {
        return view('Register');
    }

    public function authRegister()
    {
        //aggiungi al database tutti i dati

        //rimando al login
        return redirect()->to('login');
    }

    public function logout()
    {
        session()->remove('id_utente');
        return redirect()->to('/');
    }
}

/*
// Redirecting to the previous page
return redirect()->back();
*/