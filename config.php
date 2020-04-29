<?php

/**
 * config.php
 * Contient la configuration de notre application.
 */

# Configuration des Paths
define( 'PATH_ROOT', dirname( $request->server->get('SCRIPT_FILENAME'), 2 ) );
define( 'PATH_TEMPLATE', PATH_ROOT . '/templates' );

# Connexion à la BDD
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'actunews' );
define( 'DB_USER', 'root' );
define( 'DB_PASW', '' );