<?php
require 'vendor/autoload.php';
require 'config/index.php';
require 'config/database.php'; //注册db Meddo类
require 'config/validator.php'; //注册验证器类

Flight::path(__DIR__ . '/common'); //添加自动加载路径,写在路由前面,公共类
Flight::path(__DIR__ . '/controller'); //控制器
Flight::path(__DIR__ . '/model'); //数据库
Flight::path(__DIR__ . '/validator'); //验证器

require 'route/index.php';
Flight::register('xx', 'MyRegister', [['a' => 1]]); //注册自定义类

Flight::start();