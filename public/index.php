<?php
session_start();

$autoloader = require '../vendor/autoload.php';
$appNamespace = 'MyApp';

$controllersPath = realpath(__DIR__ . '/../app/controllers');

$autoloader->addPsr4("$appNamespace\\Controllers\\", $controllersPath);

// set request
$env     = new \Koine\Http\Environment($_SERVER);
$cookies = new \Koine\Http\Cookies($_COOKIE);
$session = new \Koine\Http\Session($_SESSION);
$params  = new \Koine\Http\Params($_REQUEST);


// Which controller?
$controller = $params->fetch('controller', 'index');
        $action     = $params->fetch('action', 'index') . 'Action';

$controllerClass = implode('\\', array(
    $appNamespace,
    'Controllers',
    ucfirst($controller) . 'Controller'
));

$request = new \Koine\Http\Request(array(
    'environment' => $env,
    'cookies'     => $cookies,
    'session'     => $session,
    'params'      => $params,
));

// set view
$view = new \Koine\Mvc\View();

$view->getConfig()
    ->addPath(__DIR__ . '/app/views');

require_once __DIR__ . '/../configs/dependencies.php';

$dependencyContainer = \Nurse\Di::getInstance()->getContainer();

// set front controller
$frontController = new \Koine\Mvc\FrontController();
$frontController->setRequest($request)
    ->setControllerClass($controllerClass)
    ->setDependencyContainer($dependencyContainer)
    ->setAction($action)
    ->setView($view);

$response = $frontController->execute();
$response->send();

exit();
