<?php

class kendaraan
{
    var $jumlahroda;
    var $warna;
    var $bahanbakar;
    var $harga;
    var $merek;
    var $tahunpembuatan;

    function setMerek($x)
    {
        $this->merek = $x;
    }
    function getMerek()
    {
        return $this->merek;
    }
    function setHarga($y)
    {
        $this->harga = $y;
    }
    function getHarga()
    {
        return $this->harga;
    }
    function setWarna($x)
    {
        $this->warna = $x;
    }
    function getWarna()
    {
        return $this->warna;
    }
    function setBahanBakar($y)
    {
        $this->bahanbakar = $y;
    }
    function getBahanBakar()
    {
        return $this->bahanbakar;
    }
    function setJumlahRoda($x)
    {
        $this->jumlahroda = $x;
    }
    function getJumlahRoda()
    {
        return $this->jumlahroda;
    }
    function setTahunPembuatan($y)
    {
        $this->tahunpembuatan = $y;
    }
    function getTahunPembuatan()
    {
        return $this->tahunpembuatan;
    }
}

$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Yamaha MIO');
$kendaraan1->setHarga(10000000);
$kendaraan1->setJumlahRoda(2);
$kendaraan1->setWarna('Putih');
$kendaraan1->setBahanBakar('Premium');
$kendaraan1->setTahunPembuatan(2004);
echo $kendaraan1->getMerek() . "<br>";
echo $kendaraan1->getHarga() . "<br>";
echo $kendaraan1->getJumlahRoda() . "<br>";
echo $kendaraan1->getWarna() . "<br>";
echo $kendaraan1->getBahanBakar() . "<br>";
echo $kendaraan1->getTahunPembuatan() . "<br><br>";

$kendaraan2 = new kendaraan();
$kendaraan2->setMerek('Honda Civic');
$kendaraan2->setHarga(200000000);
$kendaraan2->setJumlahRoda(4);
$kendaraan2->setWarna('Hitam');
$kendaraan2->setBahanBakar('Pertamax');
$kendaraan2->setTahunPembuatan(2015);
echo $kendaraan2->getMerek() . "<br>";
echo $kendaraan2->getHarga() . "<br>";
echo $kendaraan2->getJumlahRoda() . "<br>";
echo $kendaraan2->getWarna() . "<br>";
echo $kendaraan2->getBahanBakar() . "<br>";
echo $kendaraan2->getTahunPembuatan() . "<br>";

?>