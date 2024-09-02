<?php

class kendaraan
{
    var $merek;
    var $jmlroda;
    var $harga;
    var $warna;
    var $bhnbakar;
    var $tahun;

    function setMerek($x)
    {
        $this->merek = $x;
    }
    function setHarga($x)
    {
        $this->harga = $x;
    }
    function setjmlRoda($x)
    {
        $this->jmlroda = $x;
    }
    function setWarna($x)
    {
        $this->warna = $x;
    }
    function setbhnBakar($x)
    {
        $this->bhnbakar = $x;
    }
    function setTahun($x)
    {
        $this->tahun = $x;
    }
}
$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Toyota Yaris');
$kendaraan1->setjmlRoda(4);
$kendaraan1->setHarga(160000000);
$kendaraan1->setWarna('Merah');
$kendaraan1->setbhnBakar('Premium');
$kendaraan1->setTahun(2005);

$kendaraan2 = new kendaraan();
$kendaraan2->setMerek('Honda Scoopy');
$kendaraan2->setjmlRoda(2);
$kendaraan2->setHarga(13000000);
$kendaraan2->setWarna('Putih');
$kendaraan2->setbhnBakar('Premium');
$kendaraan2->setTahun(2004);

$kendaraan3 = new kendaraan();
$kendaraan3->setMerek('Isuzu Panther');
$kendaraan3->setjmlRoda(4);
$kendaraan3->setHarga(170000000);
$kendaraan3->setWarna('Hitam');
$kendaraan3->setbhnBakar('Solar');
$kendaraan3->setTahun(2003);

echo $kendaraan1->merek . "<br>";
echo $kendaraan1->jmlroda . "<br>";
echo $kendaraan1->harga . "<br>";
echo $kendaraan1->warna . "<br>";
echo $kendaraan1->bhnbakar . "<br>";
echo $kendaraan1->tahun . "<br>";
echo "<br>";

echo $kendaraan2->merek . "<br>";
echo $kendaraan2->jmlroda . "<br>";
echo $kendaraan2->harga . "<br>";
echo $kendaraan2->warna . "<br>";
echo $kendaraan2->bhnbakar . "<br>";
echo $kendaraan2->tahun . "<br>";
echo "<br>";

echo $kendaraan3->merek . "<br>";
echo $kendaraan3->jmlroda . "<br>";
echo $kendaraan3->harga . "<br>";
echo $kendaraan3->warna . "<br>";
echo $kendaraan3->bhnbakar . "<br>";
echo $kendaraan3->tahun . "<br>";

?>