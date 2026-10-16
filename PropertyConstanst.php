
<?php 


class Product{


    //Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;


    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100;

        
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

}


//object
$product = new Product();
$product->kode = 'h15';
$product->nama = 'LAPTOP';
$product->harga = 10000000;
$product->stock = 5;


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