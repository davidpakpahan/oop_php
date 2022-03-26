<?php

class Construct
{

    public function __construct($belajar_construct)
    {
        echo $belajar_construct .  " : Construct akan otomatis dibuat saat pembuatan Object 'new', memberi nilai awal pada property, memanggil method internal. Construct tidak memiliki nilai return";
    }
}

$data = new Construct("Belajar Construct");
