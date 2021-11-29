<?php
/**
 * Refactor this code to be the tidiest, 'best practice' design you can come up with
 * The point of this exercise is not to find minor bugs in the code, but to focus on the architecture of 
 * this piece of software and ensure it is very well designed - easy to maintain, extend, refactor over 
 * time as required.
 * 
 * This code uses a standalone implementation of Laravel Collections which provides the global 'collect'
 * method and various methods which operate on the resulting Collection object. 
 * https://laravel.com/docs/5.8/collections
 */

 use Illuminate\Support;

 session_start();

// prepare the request & process the arguments
$database = 'nba2019';
include('../include/utils.php');
require_once('../library/vendor/autoload.php');
require_once('../Controller/logic/Controller.php');

// process the args
$args = collect($_REQUEST);

if (count($args) < 1) {
    $temp_assoc_arr = array();

    $temp_assoc_arr[$_SESSION['postdata']['filter-name1']] = $_SESSION['postdata']['filter-value1'];
    $temp_assoc_arr[$_SESSION['postdata']['filter-name2']] = $_SESSION['postdata']['filter-value2'];

    $args = collect($temp_assoc_arr);
}

$format = $args->pull('format') ?: 'html';
$type = $args->pull('type');
if (!$type) {
    exit('Please specify a type');
}

$controller = new Controller($args);
echo $controller->export($type, $format);
