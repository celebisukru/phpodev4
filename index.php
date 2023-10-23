<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev 4</title>
</head>
<?php

class Sekil {
    public function alanHesapla() {
        // Alan hesaplama işlemleri burada yapılabilir.
    }
}

class Dikdortgen extends Sekil {
    private $uzunKenar;
    private $kisaKenar;

    public function __construct($uzunKenar, $kisaKenar) {
        $this->uzunKenar = $uzunKenar;
        $this->kisaKenar = $kisaKenar;
    }

    public function alanHesapla() {
        return $this->uzunKenar * $this->kisaKenar;
    }
}

class Ucgen extends Sekil {
    private $taban;
    private $yukseklik;

    public function __construct($taban, $yukseklik) {
        $this->taban = $taban;
        $this->yukseklik = $yukseklik;
    }

    public function alanHesapla() {
        return 0.5 * $this->taban * $this->yukseklik;
    }
}

class Kare extends Sekil {
    private $kenarUzunlugu;

    public function __construct($kenarUzunlugu) {
        $this->kenarUzunlugu = $kenarUzunlugu;
    }

    public function alanHesapla() {
        return $this->kenarUzunlugu * $this->kenarUzunlugu;
    }
}


$dikdortgen = new Dikdortgen(5, 10);
echo "Dikdörtgen Alanı: " . $dikdortgen->alanHesapla() . "\n";

$ucgen = new Ucgen(6, 8);
echo "Üçgen Alanı: " . $ucgen->alanHesapla() . "\n";

$kare = new Kare(4);
echo "Kare Alanı: " . $kare->alanHesapla() . "\n";

?>
</body>
</html>