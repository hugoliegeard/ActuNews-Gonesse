<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * La fonction "home" est ce qu'on
     * appelle une "action". Une action
     * est une fonction dans le controleur.
     * ------------------------------------
     * Page d'accueil du site.
     */
    public function home()
    {
        return $this->render('default/home.html.twig');
    }

    /**
     * Page / Action permettant de lister
     * les articles d'une categorie
     */
    public function category()
    {
        return $this->render('default/category.html.twig');
    }

    /**
     * Page / Action permettant d'afficher
     * un article de notre site.
     */
    public function article()
    {
        # echo '<h1>PAGE ARTICLE | CONTROLEUR</h1>';
        return new Response('<h1>PAGE ARTICLE | CONTROLEUR | RESPONSE</h1>');
    }
}