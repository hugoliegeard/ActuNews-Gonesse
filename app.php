<?php

/*
 * app.php représente notre application.
 */

use Symfony\Component\HttpFoundation\Request;

# 1. Arrivée d'une requète
# Correspond à la requète entrante de notre utilisateur.
$request = Request::createFromGlobals();

# Récupération de $_GET['controller'] dans Request
# dump( $request->query->get('controller') );
# dump( $request->query->get('action') );


# 2a. Configuration du Routage : Détermine le controller et l'action.
require_once 'router.php';

# 2b. Configuration de Twig
# dump( dirname( $request->server->get('SCRIPT_FILENAME'), 2 ) );
define( 'PATH_ROOT', dirname( $request->server->get('SCRIPT_FILENAME'), 2 ) );
define( 'PATH_TEMPLATE', PATH_ROOT . '/templates' );
# dump( PATH_TEMPLATE );

$loader = new \Twig\Loader\FilesystemLoader(PATH_TEMPLATE);
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

# 3. Traitement de la requète du client : Appel de la méthode $action du $controller.
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([new $controller, $action], []);

# 4. On retourne une réponse au client !
$response->send();