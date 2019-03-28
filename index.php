<?php
require 'vendor/autoload.php';
require 'config/index.php';
require 'config/database.php'; //注册db Meddo类

Flight::path(__DIR__ . '/common'); //添加自动加载路径,写在路由前面
Flight::path(__DIR__ . '/controller');

require 'route/index.php';
// Flight::register('test', 'Test', ['a' => 1]);

Flight::start();