<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Environment($loader, [
    'debug' => true,
]);

$twig->addExtension(new DebugExtension());
$twig->addGlobal('contactEmail', 'contact@monsite.com');

return $twig;
