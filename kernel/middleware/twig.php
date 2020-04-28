<?php

# Configuration de Twig
$loader = new \Twig\Loader\FilesystemLoader(PATH_TEMPLATE);
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);
$container->set('twig', $twig);