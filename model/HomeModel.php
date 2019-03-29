<?php

class HomeModel {

    public function getStone() {
        return Flight::db()->select("stone", '*', [
            'id[>]' => 1
        ]);
    }
}