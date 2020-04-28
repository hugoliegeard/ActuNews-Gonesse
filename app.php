<?php

/*
 * app.php représente notre application.
 */

# Chargement du Kernel (Router et Twig)
require_once 'kernel/kernel.php';

# Traitement de la requète du client : Appel de la méthode $action du $controller.
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([new $controller, $action], []);

# On retourne une réponse au client !
$response->send();