<?php

require_once "data/conflict.php";
require_once "data/helper.php"; // Sesuaikan dengan struktur direktori dan nama file

// Import data dari conflict
use Data\One\Sample as Sample;
use Data\One\Dummy as Dummy;
use Data\Two\Conflict as ConflictTwo;

// Import data dari helper
use Helper as MyNamespaceHelper; // Menggunakan alias MyNamespaceHelper

// Buat object dari namespace yang dibuat
$SampleObject = new Sample();
$DummyObject = new Dummy();

// Tampilkan helper menggunakan echo
echo MyNamespaceHelper\APPLICATION . PHP_EOL;

// Panggil fungsi helpMe()
MyNamespaceHelper\helpMe();
