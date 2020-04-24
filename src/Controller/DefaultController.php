<?php


class DefaultController
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
        echo '<h1>PAGE ACCUEIL | CONTROLEUR</h1>';
    }

    /**
     * Page / Action permettant de lister
     * les articles d'une categorie
     */
    public function category()
    {
        echo '<h1>PAGE CATEGORIE | CONTROLEUR</h1>';
    }

    /**
     * Page / Action permettant d'afficher
     * un article de notre site.
     */
    public function article()
    {
        echo '<h1>PAGE ARTICLE | CONTROLEUR</h1>';
    }
}