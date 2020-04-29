<?php

namespace App\Controller;

use App\Model\Article;
use App\Model\Category;
use Symfony\Component\HttpFoundation\Request;
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
        # 1. Récupération des Articles de la BDD
        $articles = (new Article())->findAll();

        # 2. Transmission des données à la vue
        return $this->render('default/home.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
     * Page / Action permettant de lister
     * les articles d'une categorie
     */
    public function category()
    {
        # Récupération de l'instance de Request dans le container
        /** @var Request $request */
        $request = $this->getParameter('request');
        # dump($request);

        # Récupération dans le Request du paramètre $_GET['id']
        $idCategorie = $request->get('id') ?? 1;

        # Récupération des articles de la catégorie
        $where = 'category_id = ' . $idCategorie;
        $articles = (new Article())->findAll($where);

        # Récupération de la catégorie
        $categorie = (new Category())->findOne($idCategorie);

        # Transmission des articles à la vue
        return $this->render('default/category.html.twig', [
            'articles' => $articles,
            'categorie' => $categorie
        ]);
    }

    /**
     * Page / Action permettant d'afficher
     * un article de notre site.
     */
    public function article()
    {
        # Récupération de l'instance de Request dans le container
        $request = $this->getParameter('request');

        # Récupération de l'ID de l'article
        $idArticle = $request->get('id');

        # Récupération de l'article dans la BDD
        $article = (new Article())->findOne($idArticle);

        # Transmission a la vue
        return $this->render('default/article.html.twig', [
            'article' => $article
        ]);
    }
}