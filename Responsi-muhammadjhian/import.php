<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use Data\satu\conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new conflict();
$conflict2 = new Data\dua\conflict();

helpMe();

echo APPLICATION . PHP_EOL;