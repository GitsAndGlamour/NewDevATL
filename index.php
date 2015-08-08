<?php 
require 'vendor/autoload.php';
date_default_timezone_set ('America/New_York');

$app = new \Slim\Slim(array(
  'view' => new \Slim\Views\Twig()
));

$view = $app->view();
$view->parserOptions = array(
  'debug' => true
);
            
$view->parserExternsions = array(
  new \Slim\Views\TwigExtension(),
);

$app->get('/', function() use($app){
    $app->render('home.twig');  
});

$app->get('/contact', function() use($app){
    $app->render('contact.twig');  
});

$app->get('/about', function() use($app){
    $app->render('about.twig');  
});

$app->get('/events', function() use($app){
    $app->render('events.twig');  
});

$app->get('/news', function() use($app){
    $app->render('news.twig');  
});

$app->get('/projects', function() use($app){
    $app->render('projects.twig');  
});
$app->run();