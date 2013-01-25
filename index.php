<?php
require_once 'vendor/autoload.php';
require_once "bootstrap.php";

$app = new \Slim\Slim();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$app->get('/', function () use ($twig) {
    echo $twig->render('index.php', array());
});

$app->get('/signup', function () use ($twig) {
    echo $twig->render('signup.php', array('title' => 'Signup',
                                           'rest' => 'get'));
});

$app->post('/signup', function () use ($app, $twig, $entityManager) {
    $userEmail = $app->request()->post('email');
    $userPassword = $app->request()->post('password');
    $user = new User();
    $user->setEmail($userEmail);
    $user->setPassword($userPassword);

    $entityManager->persist($user);
    $entityManager->flush();
    echo $twig->render('signup.php', array('title' => 'Signup',
                                           'rest' => 'post'));
});

$app->run();
?>