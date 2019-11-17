<?php

use view\view;

$views = [
    "MainPage" => new view($_SERVER['DOCUMENT_ROOT'] . "/app/public/index.php"),
    "404" => new view($_SERVER['DOCUMENT_ROOT'] . "/app/public/404.php")
];