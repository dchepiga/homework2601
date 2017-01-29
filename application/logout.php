<?php
include_once('session.php');
include_once('config.php');

session_destroy();
//var_dump(dirname($_SERVER['REQUEST_URI']));
header("Location: http://".$_SERVER['HTTP_HOST'].$config['rootProject']);