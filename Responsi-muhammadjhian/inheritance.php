<?php

// import data/person.php
require_once "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager = new Manager();
$manager->nama = "JHian";
$manager->sayHello("efendi");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$VicePresident1 = new VicePresident();
$VicePresident1->nama = "Jhian";
$VicePresident1->alamat ="bengkulu";
$VicePresident1->sayHello("Efendi");
