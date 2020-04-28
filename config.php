<?php

# Configuration des Paths
define( 'PATH_ROOT', dirname( $request->server->get('SCRIPT_FILENAME'), 2 ) );
define( 'PATH_TEMPLATE', PATH_ROOT . '/templates' );

# Connexion à la BDD