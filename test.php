<?php 
$uri = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : false;
$query = (isset($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : '';
$url = str_replace($query, '', $uri);
$arr = explode('/', $url);
$q = array_shift($arr);