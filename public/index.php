<?php

/*
 * Ici, notre fichier index.php représente
 * notre controleur frontal.
 * ---------------------------------------
 * Il a pour charge de rediriger la requète
 * de l'utilisateur vers le bon controleur
 * en s'aidant des paramètres dans l'URL.
 */

use Symfony\Component\HttpFoundation\Request;

# Autochargement des classes avec Composer
require_once '../vendor/autoload.php';

# Arrivée d'une requète
# Correspond à la requète entrante de notre utilisateur.
# https://symfony.com/doc/current/components/http_foundation.html#request
$request = Request::createFromGlobals();

# Mise en Place du container
# Stocker la requète de l'utilisateur dans le container
$container = \App\Model\Container\Container::getInstance();
$container->set('request', $request);

# Chargement des constantes de configuration
require_once '../config.php';

# Chargement de l'application
require_once '../app.php';