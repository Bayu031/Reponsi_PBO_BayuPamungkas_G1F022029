<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);

// Tampilkan product get name
echo "Product Name: " . $product->getName() . PHP_EOL;

// Tampilkan product get price
echo "Product Price: " . $product->getPrice() . PHP_EOL;

// Buat objek dari kelas ProductDummy
$dummy = new ProductDummy("Dummy", 1000);

// Tampilkan informasi menggunakan metode info
$dummy->info();
