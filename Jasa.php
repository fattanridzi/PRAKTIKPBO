<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstanst2.php');

use Pbo\Marketplace\Product;

class Jasa {

    use Product;

    public function payment($tipe) {
        
        return match ($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "Hanya bisa pakai va dan qris",
        };

    }

    
}
