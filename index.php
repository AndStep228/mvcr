<?php
require_once "app/models/require.php";
require_once "app/controllers/require.php";
require_once "app/view/require.php";


use app\models\flexice\router\router;
use app\models\app;


$router = new router();

$router->Get("/", function () use ($views) {
    $app = new app($views['MainPage']);
});

$router->ErrorPage(function () use ($views) {
    $app = new app($views['404']);
});

