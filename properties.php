<?php

class Siswa
{
    public $nama = "Nama Default"; //Nama Default
    public $nis;
    public $jurusan;

    public function set_nama($nama)
    {
        //Metode pemanggilan properties tanpa construct
        $this->nama = $nama;
    }

    public function set_nis($nis)
    {
        //Metode pemanggilan properties tanpa construct
        $this->nis = $nis;
    }

    public function set_jurusan($jurusan)
    {
        //Metode pemanggilan properties tanpa construct
        $this->jurusan = $jurusan;
    }

    public function get_data()
    {
        return
            "Nama saya : " . $this->nama . " , " . $this->nis . " , " . $this->jurusan;
    }
}

$data_siswa = new Siswa();
$data_siswa->set_nama("David Pakpahan"); //Membuat nilai properties;
$data_siswa->set_nis(12345678); //Membuat nilai properties;
$data_siswa->set_jurusan("Teknik Audio Video"); //Membuat nilai properties;
echo $data_siswa->get_data();
