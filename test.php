<?php

require_once(__DIR__ . '/Autoload.php');

$st = new \searching\BST();

$st->put(8);
$st->put(5);
$st->put(12);
var_dump($st);


