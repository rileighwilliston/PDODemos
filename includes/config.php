<?php

//site configuration file

//define the site location
define('SITE_URI', '/InClassPDODemos/');

//start the session


//start output buffering

//get database connection information
$root = dirname($_SERVER['DOCUMENT_ROOT']).'/dbconn';

//create constant to represent final db connection 
define ('MYSQL',$root.'/2018_pdo_connect.php');
//  c:/xampp/dbconn/2018_pdo_connect.php
