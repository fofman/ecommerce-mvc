<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function login(): string
    {
        $error = $this->request->getGet('error');
        return view('Login', ['error' => $error]);
    }

    public function account()
    {
        $modelUtenti = model('Utenti');
        if (session()->get('id_utente') == NULL) return redirect()->to('login');
        return view('Account', ['utente' => $modelUtenti->getUtenteById(session()->get('id_utente'))[0]]);
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
                return redirect()->to('login?error=1');
                break;
            case 2:
                //password sbagliata
                return redirect()->to('login?error=2');
                break;
        }
    }

    public function register(): string
    {
        $error = $this->request->getGet('error');
        return view('Register', ['error' => $error]);
    }

    public function authRegister()
    {
        //aggiungi al database tutti i dati
        $modelUtenti = model('Utenti');
        $nome_utente = $this->request->getPost('nome_utente');
        $password = $this->request->getPost('password');
        $error = $modelUtenti->addUtente($nome_utente, $password);
        //rimando al login
        if ($error == 1) return redirect()->to('register?error=1');
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