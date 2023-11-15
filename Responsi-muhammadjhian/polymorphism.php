<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Muhammad Jhian Efendi");
var_dump($company);

$company->programmer = new BackendProgrammer("Muhammad Jhian Efendi");
var_dump($company);

$company->programmer = new FrontendProgrammer("Muhammad Jhian Efendi");
var_dump($company);

sayHelloProgrammer(new Programmer("Muhammad Jhian Efendi"));
sayHelloProgrammer(new BackendProgrammer("Muhammad Jhian Efendi"));
sayHelloProgrammer(new FrontendProgrammer("Muhammad Jhian Efendi"));