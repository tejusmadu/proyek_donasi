<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

// Integrasi kode rute
if ($request->is('/login') && $request->isMethod('get')) {
    // Tampilkan halaman login
    return $kernel->handle($request)->send();
} elseif ($request->is('/login') && $request->isMethod('post')) {
    // Panggil fungsi login dari AuthController
    $authController = new App\Http\Controllers\AuthController();
    return $authController->login($request);
} else {
    //
}

$response->send();

$kernel->terminate($request, $response);
