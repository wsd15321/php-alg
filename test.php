<?php

require_once(__DIR__ . '/Autoload.php');

$st = new \searching\BST();

$st->put(4,12);
$st->put(2,10);
$st->put(21,1);
$st->put(3,6);
$st->put(11,55);
$st->put(1,4);
$st->put(7,8);
$st->put(6,14);

$value = $st->get(55);
var_dump($value);


