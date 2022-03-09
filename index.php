<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
// header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,
// Content-Type,Access-Control-Allow-Methods,Authorizaion');

require_once 'Db.php';
require_once 'post.php';

$url = $_GET['url'];

$url = trim($url,'/');

$url = explode('/',$url);

$function = $url[0];
unset($url[0]);
$args = $url;

if(!is_callable($function)){
    notFound();
}

call_user_func_array($function,$args);