<?php
require 'vendor/autoload.php';
require 'config/index.php';
require 'config/database.php'; //注册db Meddo类
require 'config/validator.php'; //注册验证器类

$pathList = [
    // __DIR__ . '/common',
    // __DIR__ . '/controller',
    // __DIR__ . '/model',
    // __DIR__ . '/validator',
    __DIR__,
];
Flight::path($pathList); //添加自动加载路径,写在路由前面,公共类,控制器,数据库,验证器

require 'route/index.php';
Flight::register('xx', 'common\MyRegister', [['a' => 1]]); //注册自定义类

Flight::start();