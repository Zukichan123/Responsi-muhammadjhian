<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Muhammad jhain Efendi","bengkulu");

// panggil function
$person1->sayHello("muhammad jhian");

// panggil self keyword
$person1->info(). PHP_EOL;
