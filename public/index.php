<?php

/*
 * Ici, notre fichier index.php représente
 * notre controleur frontal.
 */

//echo '<pre>';
//print_r( $_GET );
//echo '</pre>';

/**
 * Permet d'automatiser le chargement
 * des classes de notre projet.
 */
spl_autoload_register(function ( $class ) {
    echo 'Chargement de la classe : ' . $class . '<br>';
    require_once '../src/Controller/' . $class . '.php';
});

# Récupération des paramètres GET.
# cf. https://www.php.net/manual/fr/language.operators.comparison.php
$controller = ucfirst( $_GET['controller'] ) . 'Controller'; // ?? 'default'
$action     = $_GET['action']; // ?? 'home'

# --------------------- | ROUTAGE AUTOMATIQUE | ---------------------- #
<
$obj = new $controller();
$obj->$action();

# ------------------------ | ROUTAGE MANUEL | ------------------------ #

//require_once '../src/Controller/DefaultController.php';
//require_once '../src/Controller/UserController.php';
//$defaultCtrl = new DefaultController();
//$userCtrl = new UserController();

# Page Accueil
//if( $controller === 'default' && $action === 'home' ) {
//    $defaultCtrl->home();
//}

# Page Categorie
//if( $controller === 'default' && $action === 'category' ) {
//    $defaultCtrl->category();
//}

# Page Article
//if( $controller === 'default' && $action === 'article' ) {
//    $defaultCtrl->article();
//}

// -- Controleur pour gérer les utilisateurs

# Page Connexion
//if( $controller === 'user' && $action === 'login' ) {
//    $userCtrl->login();
//}

# Page Inscription
//if( $controller === 'user' && $action === 'register' ) {
//    $userCtrl->register();
//}