<?php

define("APP_PATH", dirname(dirname(__FILE__)));

$app = new Yaf_Application(APP_PATH . "/conf/app.ini");
$app->bootstrap()->run();
