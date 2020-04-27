<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class UserController
{
    /**
     * Permet la connexion d'un utilisateur
     */
    public function login()
    {
        # echo '<h1>PAGE CONNEXION | CONTROLEUR</h1>';
        return new Response('<h1>PAGE CONNEXION | CONTROLEUR| RESPONSE</h1>');
    }

    /**
     * Permet l'inscription d'un utilisateur
     */
    public function register()
    {
        # echo '<h1>PAGE INSCRIPTION | CONTROLEUR</h1>';
        return new Response('<h1>PAGE INSCRIPTION | CONTROLEUR| RESPONSE</h1>');
    }
}