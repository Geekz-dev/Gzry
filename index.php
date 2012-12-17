<?php
/**
 *  Gzry API Index
 *
 *  @author R.SkuLL
 *  Copyright (c) 2012 Geekz Web Development
*/

$gz = urlencode($_GET['gz']);
define('URL_PATH', 'urls/');
$file = URL_PATH.$gz.'.dat';

if (file_exists($file)) {
    $url = file($file);
    $decurl = urldecode($url[0]);
    header("location: $decurl");
}
else {
    echo 'Error';
}
