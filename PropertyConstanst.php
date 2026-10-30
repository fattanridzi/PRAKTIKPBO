
<?php
namespace Pbo\Marketplace;

class Product {

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

$product = new Product('h15', 'LAPTOP', 10000000, 5);

echo "product: " . $product->nama . "<br>";
echo "harga: " . $product->harga . "<br>";
echo "stock: " . $product->stock . "<br>";
echo "PAJAK: " . $product->pajak() . "%<br>";
echo "total: " . $product->total();