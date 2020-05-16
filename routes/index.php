<?php

use function src\{ slimConfiguration, basicAuth, jwtAuth };
use App\Controllers\{ ComprasController, AuthController  };
use App\Middlewares\JwtDateTimeMiddleware;

$app = new \Slim\App(slimConfiguration());

$app->post('/login', AuthController::class . ':login');
$app->get('/compras', ComprasController::class.':getAllByUser');
$app->get('/compras/resume', ComprasController::class.':getResume');
// =========================================
$app->group('', function() use ($app) {
    $app->post('/compras', ComprasController::class.':insertCompra');
    $app->put('/compras', ComprasController::class.':editCompra');
    $app->delete('/compras', ComprasController::class.':deleteCompra');
})->add(new JwtDateTimeMiddleware())->add(jwtAuth());


// =========================================

$app->run();
