<?php
class Home extends Base {
    public function index() {
        Send::success();
    }

    public function template() {
        Flight::render('index.php', array('name' => 'Bob'));
    }
}