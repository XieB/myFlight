<?php

Flight::route('GET|POST /', array('Home','index'));
Flight::route('GET|POST /template', array('Home','template'));
Flight::route('GET|POST /database', array('Home','dataBase'));
Flight::route('GET|POST /reg', array('Home','myRegister'));
Flight::route('GET|POST /req', array('Home','getReqParams'));
Flight::route('GET|POST /vali', array('Home','validator'));