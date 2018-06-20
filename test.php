<?php

require_once(__DIR__ . '/Autoload.php');

$st = new \searching\BST();

$st->put(11);
$st->put(10);
$st->put(7);
$st->put(17);
$st->put(20);
$st->put(2);
$st->put(12);
var_dump($st->node);


