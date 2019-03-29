<?php
class Home
{
    public static function index()
    {  //发送json
        Send::success();
    }

    public static function template()
    {  //模板
        Flight::render('index.php', array('name' => 'Bob'));
    }

    public static function dataBase()
    { //数据库
        $data = (new HomeModel())->getStone();
        Send::success($data);
    }

    public static function myRegister()
    { //注册自定义类
        Flight::xx()->index();
    }

    public static function getReqParams()
    { //获取参数
        $request = Flight::request();
        Send::success($request->data->a);
        Send::success($request->getBody());
        Send::success($request->query['a']);
    }

    public static function validator()
    { //验证器
        // $v = Flight::validator()->getInstance(['id' => '111']);
        $v = (new HomeValidator())->setData(['id' => '111'])->validator();
        
        Send::success(['a' => 111]);
    }
}

