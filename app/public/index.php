<?php

use app\controllers\TestController;
use app\models\bootstrap\flexice\bootstrap;
use app\models\request;


$bootstrap = new bootstrap();

$bootstrap->setTheme($bootstrap::THEMES_BOOTSTRAP['LUX']);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi Everyone</title>
    <link rel="stylesheet" href="<?php echo $bootstrap->get_css(); ?>">
</head>
<body>

<div class="container">
    <div class="clearfix mt-5"></div>
    <div class="row">
        <div class="col-12 justify-content-center d-flex">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php
                        $tc = new TestController(new request(["Text" => "test"]));
                        ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">v1.0.1</h6>
                    <p class="card-text">Now domain: <?php echo $_SERVER['HTTP_HOST'] ?></p>
                    <a target="_blank" href="https://github.com/fl3xice/mvcr.cc/wiki" class="card-link">API
                        Reference</a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo $bootstrap->get_js(); ?>"></script>
</div>

</body>
</html>