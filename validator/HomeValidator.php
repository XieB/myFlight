<?php

class HomeValidator extends BaseValidator {

    public function validator() {
        $this->v->rule('required', 'ids');
        $this->check();
    }
}