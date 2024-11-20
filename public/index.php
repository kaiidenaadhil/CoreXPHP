<?php
//session_start();

// Include Composer's autoload file
require_once '../vendor/autoload.php';


include "../app/init.php";
date_default_timezone_set('UTC');
$app = new app(dirname(__DIR__));

// Load routes
require_once '../app/routes/web.php';
require_once '../app/routes/api.php';


// Run the application
$app->run();
