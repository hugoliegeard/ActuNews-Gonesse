<?php

/**
 * Ici, le fichier Kernel va permettre
 * de charger les composants middleware
 * de notre application.
 * ------------------------------------
 * Piste d'amélioration. utiliser une
 * approche orienté objet.
 */

# ----------- Début du chargement des Middlewares ----------- #

# Chargement du Router
require_once 'middleware/router.php';

# Chargement de Twig
require_once 'middleware/twig.php';

# ----------- Fin du chargement des Middlewares ----------- #