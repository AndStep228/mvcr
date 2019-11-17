<?php
require_once "app/models/require.php";
require_once "app/view/require.php";

use app\models\bootstrap\flexice\bootstrap;
use app\models\flexice\router\router;
use app\models\pyramid;
use app\models\app;
use view\view;


$router = new router();

$router->Get("/", function () use ($views, $router) {
    $app = new app($views['MainPage']);
});

$router->E404(function () use ($views) {
    $app = new app($views['404']);
});
