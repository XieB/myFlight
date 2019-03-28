<?php
class Home {
    public static function index() {
        Send::success();
    }

    public static function template() {
        Flight::render('index.php', array('name' => 'Bob'));
    }

    public static function dataBase() {
        Flight::db()->insert("stone", [
            "name" => "foo",
        ]);
        // Flight::test()->a();

    }
}