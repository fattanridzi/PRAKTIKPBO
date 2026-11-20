<?php

require('./PropertyConstanst2.php');

use Pbo\Marketplace\Product;

//object
$product = new Product();

$product -> setkode("P001")
->setnama('Laptop')
->setharga(10000000)
->setstock(5);


echo "product: " . $product ->getnama();
echo "<br>";

echo "harga: " . $product ->getharga();
echo "<br>";
echo "stock: " . $product ->getstock();
echo "<br>";
echo "PAJAK: " . $product->pajak()."%";
echo "<br>";
echo "<br>";
echo "total: " . $product->total();
echo "<br>";
// echo "product  " . $product -> nama;