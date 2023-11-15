<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$alzah = new Person("Muhammad Jhian Efendi", "bengkulu");

// tambahkan value nama di object
$alzah->nama = "Muhammad Jhian efendi";

// panggil function sayHelloNull dengan parameter
$alzah->sayHelloNull("jhian");

// buat object dari kelas person
$fariski = new Person("jhian", "bengkulu");

// tambahkan value nama di object
$fariski->nama = "jhian";

// panggil function sayHelloNull dengan parameter null
$fariski->sayHelloNull(null);
