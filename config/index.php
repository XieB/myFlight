<?php

Flight::set('flight.views.path', 'views'); //模板路径，可自定义模板引擎
Flight::set('flight.log_errors', true); //打开错误日志

Flight::before('json', function () { //跨域
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET,PUT,POST,DELETE,OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');
});