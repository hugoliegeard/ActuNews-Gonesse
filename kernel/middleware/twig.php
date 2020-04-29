<?php

# Configuration de Twig
use Twig\Extra\String\StringExtension;

$loader = new \Twig\Loader\FilesystemLoader(PATH_TEMPLATE);
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

# Ajouter l'extention String
$twig->addExtension(new StringExtension());

# Ajout d'une super global dans twig.
# La variable basePath sera disponible dans tous nos fichiers template.
$twig->addGlobal('basePath', $container->get('request')->getBasePath());

$container->set('twig', $twig);