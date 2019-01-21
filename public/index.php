<?php

define('DS', DIRECTORY_SEPARATOR);
define('URL_BASE', 'http://localhost/library/');

define('ROOT', dirname(dirname(__FILE__)));
if (!isset($_GET['url'])) {
    $url ='accueil/home';
}else $url = $_GET['url'];




require_once (ROOT . DS . 'config' . DS . 'bootstrap.php');
