<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$bayu = new Person("Bayu", "Musi");

// tambahkan value nama di object
$bayu->nama = "Bayu";

// panggil function sayHelloNull dengan parameter
$bayu->sayHelloNull("Bro");

// buat object dari kelas person
$pamung = new Person("Pamungkas", "Bengkulu");

// tambahkan value nama di object
$pamung->nama = "Pamungkas";

// panggil function sayHelloNull dengan parameter null
$pamung->sayHelloNull(null);
