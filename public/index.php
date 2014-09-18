<?php
/**
 *------------------------------------------------------------------------------
 * Configuration
 *------------------------------------------------------------------------------
 */

// Do not forget to update your composer.json accordingly
$appNamespace = 'MyApp';

// The function to resolve the controller class
$resolveControllerClass = function ($params) use ($appNamespace) {
    $controller = $params->fetch('controller', 'index');

    return implode('\\', array(
        $appNamespace,
        'Controllers',
        ucfirst($controller) . 'Controller'
    ));
};

// The function to resolve the action to be called on the controller
$resolveControllerAction = function ($params) {
    return $params->fetch('action', 'index') . 'Action';
};

/**
 *------------------------------------------------------------------------------
 * Bootstrap
 *------------------------------------------------------------------------------
 */
session_start();
$autoloader = require '../vendor/autoload.php';

// set request
$env     = new \Koine\Http\Environment($_SERVER);
$cookies = new \Koine\Http\Cookies($_COOKIE);
$session = new \Koine\Http\Session($_SESSION);
$params  = new \Koine\Http\Params($_REQUEST);

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
    ->setControllerClass($resolveControllerClass($params))
    ->setAction($resolveControllerAction($params))
    ->setDependencyContainer($dependencyContainer)
    ->setView($view);

$response = $frontController->execute();
$response->send();

exit();
