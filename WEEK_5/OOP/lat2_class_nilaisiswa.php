<?php
class NilaiSiswa {
public $nama;
public $nilai;
public $sekolah='SDIT NF';
function __construct($nama, $nilai, $umur)
{
$this->nama = $nama;
$this->nilai = $nilai;
$this->umur = $umur;
}
public function getHasil()
{
if ($this->nilai > 55 ) return 'Lulus';
else return 'Tidak Lulus';
}
}

$ns1 = new NilaiSiswa('Andini',90,19);
$ns2 = new NilaiSiswa('Jisung',80,22);

echo $ns1->nama .' : '. $ns1->getHasil() .' : '. $ns1->umur;
echo $ns2->nama .' : '. $ns2->getHasil() .' : '. $ns2->umur;
?>