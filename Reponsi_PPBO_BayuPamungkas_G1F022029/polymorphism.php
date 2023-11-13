<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Saya");
var_dump($company);

$company->programmer = new BackendProgrammer("Saya");
var_dump($company);

$company->programmer = new FrontendProgrammer("Saya");
var_dump($company);

sayHelloProgrammer(new Programmer("Saya"));
sayHelloProgrammer(new BackendProgrammer("Saya"));
sayHelloProgrammer(new FrontendProgrammer("Saya"));