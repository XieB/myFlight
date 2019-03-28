<?php

class Test {
    public $config;
    public function __construct($config) {
        $this->config = $config;
    }

    public function a() {
        print_r($this->config);
    }
}