<?php

class Buku
{
    //Variabel pada OOP di sebut Properties.
    public $judul;
    public $pengarang;
    public $penerbit;
    public $harga;
    public $tahun;

    public function __construct($harga)
    {
        $this->harga = $harga;
        // $this untuk mengakses Properties.
    }

    public function status_harga()
    //Function pada OOP di sebut method.
    {
        if ($this->harga > 50_000_000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }
}

$hasil_status = new Buku(100_000_000);
//Tanpa ada Object Class bukan apa-apa.
echo $hasil_status->status_harga();
