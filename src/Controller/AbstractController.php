<?php


namespace App\Controller;

use App\Model\Container\Container;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * Class AbstractController
 * @package App\Controller
 * AbstractController est ce qu'on appel
 * une classe abstraite en PHP.
 * ------------------------------------------
 * Une classe abstraite est une classe
 * que l'on ne peux instancié. ( on ne
 * peux pas créer un objet)
 * -------------------------------------------
 * Pour être utilisé, elle doit
 * OBLIGATOIREMENT être hérité !
 * -------------------------------------------
 * Autre particularité, elle peut comporter
 * des méthodes abstraites. CAD, des fonctions
 * qui n'ont pas encore été écrites.
 */
abstract class AbstractController
{
    private $container;

    /**
     * On récupère l'instance du container
     * de notre application.
     */
    public function __construct()
    {
        $this->container = Container::getInstance();
    }

    /**
     * Permet de récupérer une instance
     * dans le container.
     * @param string $key
     * @return mixed
     */
    protected function getParameter(string $key) {
        return $this->container->get( $key );
    }

    /**
     * Retourner à l'utilisateur une page.
     * Nous allons utiliser Twig.
     * @param string $view
     * @param array $parameters
     * @return Response
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    protected function render(string $view, array $parameters = []): Response
    {
        # 1. Récupérer Twig dans le container
        /** @var Environment $twig */
        $twig = $this->container->get('twig');

        # 2. Compilation de votre template
        $content = $twig->render($view, $parameters);

        # 3. Fabrication d'une réponse
        $response = new Response();

        # 4. Affectation du contenu de Twig
        $response->setContent($content);

        # 5. Retour de la réponse au Controller
        return $response;
    }
}