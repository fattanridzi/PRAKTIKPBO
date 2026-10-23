
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

    public function __construct($kode, $nama, $harga, $stock) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stock = $stock;   
        
        

    }
    

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

}


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