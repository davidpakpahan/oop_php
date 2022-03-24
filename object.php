<?php

class Laptop
{
    public $nama;
    public $kondisi;
    public $warna;
    public $ukuran;
    public $harga;

    public function __construct($nama, $kondisi, $harga)
    {
        $this->nama = $nama;
        $this->kondisi = $kondisi;
        $this->harga = $harga;
    }

    public function get_data()
    {
        static $i = 0;
        $i++;
        return
            "<h3>Produk $i : </h3>" .
            $this->nama .
            " , " .
            $this->kondisi .
            " , " .
            $this->harga;
    }
}

$produk1 = new Laptop("Asus", "Baru", 5000_0000);
$produk2 = new Laptop("Lenovo", "Bekas", 2000_0000);
$produk3 = new Laptop("Dell", "Baru", 4000_0000);

echo $produk1->get_data();
echo $produk2->get_data();
echo $produk3->get_data();
