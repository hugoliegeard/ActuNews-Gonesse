<?php

/*
 * L'objectif du router est de déterminer
 * quel est le controleur et l'action à executer
 * en se basant sur l'URL.
 */

# Récupération des paramètres GET.
# cf. https://www.php.net/manual/fr/language.operators.comparison.php
$controller = 'App\\Controller\\' . ucfirst($request->query->get('controller')) . 'Controller';
$action = $request->query->get('action');