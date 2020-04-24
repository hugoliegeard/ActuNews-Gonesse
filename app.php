<?php

/*
 * app.php représente notre application.
 */

# 1. Chargement Automatique des Classes
require_once 'autoload.php';

# 2. Configuration du Routage
require_once 'router.php';

# 3. Traitement de la requète du client
call_user_func_array([new $controller, $action], []);
//$obj = new $controller();
//$obj->$action();