<?php
$pembeli = $_POST['pembeli'];
$barang = $_POST['barang'];
$jumlah = $_POST['jumlah'];
$submit = $_POST['submit'];

// buat total belanja//
if ($barang == 'Tv'){
    $harga = 4200000;
}
elseif ($barang == 'Kulkas'){
    $harga = 3100000;
}
else {
    $harga = 3800000;
}

$hasil = $jumlah * $harga; 

echo 'Nama Customer: ' . $pembeli;
echo '</br>Produk Pilihan: ' . $barang;
echo '</br>Jumlah Beli: ' . $jumlah;
echo '</br>Total Belanja: ' . $hasil;
?>