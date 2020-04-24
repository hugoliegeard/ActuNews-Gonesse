<?php

/*
 * L'objectif du router est de déterminer
 * quel est le controleur et l'action à executer
 * en se basant sur l'URL.
 */

# Récupération des paramètres GET.
# cf. https://www.php.net/manual/fr/language.operators.comparison.php
$controller = ucfirst($_GET['controller']) . 'Controller';
$action = $_GET['action'];