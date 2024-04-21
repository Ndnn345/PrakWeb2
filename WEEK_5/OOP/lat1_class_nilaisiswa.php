<?php

// class
class NilaiSiswa
{
    public $nama;
    public $nilai;
    public $kuliah = 'STT NF';
    public function gethasil()
    {
        if($this->nilai > 55) return 'Lulus';
        else return 'Gak Lulus';
    }
}

// this-> ke Variabel
// self:: ke constructor
// __contstructor sebagai penghubung

// objek
$ns1 = new NilaiSiswa();
$ns1->nama = 'Andin = ';
$ns1->nilai = 80;

echo $ns1->nama;
echo $ns1->nilai;
echo $ns1->kuliah;
echo $ns1->getHasil();
?>