<?php

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../app/view');
$twig = new \Twig\Environment($loader, [
    'cache' => '/path/to/compilation_cache',
    'auto_reload' => true,
]);
$parameters['error'] = $_SESSION['msg_error']['msg'] ?? null;
$parameters['name_user'] = $_SESSION['user']['name_user'] ?? null;
$parameters['base_url'] = "http://$_SERVER[HTTP_HOST]/myDash/public";
// $parameters['post'] = var_dump($_POST);

$template = $twig->load('home.html');
echo $template->render( $parameters );