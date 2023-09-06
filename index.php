<?php

include("controllers/PageController.php");
include("routes/router.php");

$router = new Router();
$router->getPath($_SERVER['REQUEST_URI']);
