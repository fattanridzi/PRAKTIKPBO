
<?php 


class Product{


    //Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;


    public const PAJAK = 0.11;
}


//object
$product = new Product();
$product->kode = 'h15';
$product->nama = 'LAPTOP';
$product->harga = 10000000;
$product->stock = 5;


//hitung pajak
$pajak = product::PAJAK * 100;
$jumlahPajak = $product->harga * product::PAJAK;
$total = $product -> harga + $jumlahPajak;


echo "product: " . $product -> nama;
echo "<br>";

echo "harga: " . $product -> harga;
echo "<br>";
echo "stock: " . $product -> stock;
echo "<br>";
echo "PAJAK: " . $pajak;
echo "<br>";
echo "<br>";
echo "total: " . $total;
echo "<br>";
// echo "product: " . $product -> nama;