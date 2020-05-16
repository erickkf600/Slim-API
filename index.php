<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
header("Content-type: application/json");

require_once './vendor/autoload.php';
require_once './env.php';
require_once './src/slimConfiguration.php';
require_once './src/basicAuth.php';
require_once './src/jwtAuth.php';
require_once './routes/index.php';
