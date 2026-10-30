<?php

require('./PropertyConstanst.php');

use Pbo\Marketplace\Product;

//object
$product = new Product('h15', 'LAPTOP', 10000000, 5);


echo "product: " . $product -> nama;
echo "<br>";

echo "harga: " . $product -> harga;
echo "<br>";
echo "stock: " . $product -> stock;
echo "<br>";
echo "PAJAK: " . $product->pajak()."%";
echo "<br>";
echo "<br>";
echo "total: " . $product->total();
echo "<br>";
// echo "product: " . $product -> nama;