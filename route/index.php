<?php
$home = new Home();

Flight::route('GET|POST /', array($home,'index'));
Flight::route('GET|POST /template', array($home,'template'));