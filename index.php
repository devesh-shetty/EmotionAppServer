<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->view(new \JsonApiView());
$app->add(new \JsonApiMiddleware());
