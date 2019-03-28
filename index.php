<?php
require 'vendor/autoload.php';
require 'config/index.php';

Flight::path(__DIR__ . '/common'); //添加自动加载路径,写在路由前面
Flight::path(__DIR__ . '/controller');

require 'route/index.php';

Flight::start();