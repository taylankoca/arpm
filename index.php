<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("controllers/PageController.php");
include("routes/router.php");

$router = new Router();
$router->getPath($_SERVER['REQUEST_URI']);
