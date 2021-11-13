<?php

function debug($arr, $die = false){
    echo '<pre>' . print_r($arr, true) . '</pre>';
    if($die) die;
}

function redirect($http = false){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function alphaKeyBlock($arr) {
    $block = '';
    $i = 0;

    while ($i < 5) {
        $i++;
        $index = rand(0, count($arr)-1);
        $block .= $arr[$index];
    }

    return $block;
}

function alphaKeygen() {
    $pattern = array(
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        1, 2, 3, 4, 5, 6, 7, 8, 9, 0,
    );

    return alphaKeyBlock($pattern) . '-' . alphaKeyBlock($pattern) . '-' . alphaKeyBlock($pattern) . '-' . alphaKeyBlock($pattern) . '-' . alphaKeyBlock($pattern) . '-' . alphaKeyBlock($pattern);
}

function str_short($string = '', $length = 50) {
    $string = strip_tags($string);
    $string = substr($string, 0, $length);
    $string = rtrim($string, "!,.-");
    $string = substr($string, 0, strrpos($string, ' '));
    return $string."… ";
}