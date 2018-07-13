<?php

require_once(__DIR__ . '/Autoload.php');

$st = new \searching\BST();

$st->put(4,12);
$st->put(2,10);
$st->put(3,6);
$st->put(8, 11);
var_dump($st->get(3));


