<?php
require_once "app/models/require.php";

use app\models\bootstrap\flexice\bootstrap;
use app\models\flexice\router\router;


$bootstrap = new bootstrap();


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi Every One</title>
    <link rel="stylesheet" href="<?php echo $bootstrap->get_grid_css(); ?>">
</head>
<body>


</body>
</html>