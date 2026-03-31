<?php

use app\controllers\ApiExampleController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {
		$router->get('/', function() use ($app) {
		$example = new ApiExampleController($app);
		$produits = $example->home();
		$app->render('example.php', ['produits'=>$produits]);
	});
		
}, [ SecurityHeadersMiddleware::class ]);