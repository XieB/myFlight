<?php

class Send {
    static function success($data = []) {
        Flight::json([
            'data' => $data,
            'message' => 'ok',
            'status' => 1
        ]);
    }

    static function error($info = '出错了') {
        Flight::json([
            'data' => [],
            'info' => $info,
            'status' => 0
        ]);
    }
}