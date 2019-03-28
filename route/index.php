<?php

Flight::route('GET|POST /', array('Home','index'));
Flight::route('GET|POST /template', array('Home','template'));
Flight::route('GET|POST /database', array('Home','dataBase'));