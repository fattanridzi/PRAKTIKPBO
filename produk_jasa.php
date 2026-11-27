<?php

require('./Jasa.php');

use Pbo\Marketplace\Jasa;

//object
$product = new Jasa();

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
echo "total harga setelah pajak: " . $product->total();
echo "<br>";

echo "<br>";
echo "Metode pembayaran: " . $product->payment("qris");
