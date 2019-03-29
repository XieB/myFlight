<?php
namespace validator;
class Home extends Base {

    public function validator() {
        $this->v->rule('required', 'id');
        $this->check();
    }
}