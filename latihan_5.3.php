<?php
class Kendaraan
{
    var $warna = "Hitam";
    var $bahanbakar = "Premium";
    var $harga = 70000000;
    var $merek = "Kijang";
    var $tahunpembuatan = 2015;
    var $platnomor = 4326;

    function statusharga()
    {
        if ($this->harga > 50000000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }

    function dapatsubsidi()
    {
        if ($this->bahanbakar == "Premium" && $this->tahunpembuatan < 2005) {
            $status = "Mendapat Subsidi";
        } else {
            $status = "Tidak Mendapat Susidi";
        }
        return $status;
    }

    function hargabekas()
    {
        if ($this->tahunpembuatan > 2005) {
            $hargasecond = $this->harga - ($this->harga * 0.2);
        } elseif ($this->tahunpembuatan >= 2000 && $this->tahunpembuatan <= 2005) {
            $hargasecond = $this->harga - ($this->harga * 0.3);
        } elseif ($this->tahunpembuatan < 2000) {
            $hargasecond = $this->harga - ($this->harga * 0.4);
        }
        return $hargasecond;
    }

    function pajakkendaraan()
    {
        if ($this->tahunpembuatan < 2017) {
            return $jumlahpajak = $this->harga * 0.025;
        }
    }

    function harioperasi()
    {
        if ($this->platnomor % 2 == 0) {
            $hari = "Selasa, Kamis, Sabtu";
        } else {
            $hari = "Senin, Rabu, Jum'at, Minggu";
        }
        return $hari;
    }
}

$objekMobil = new Kendaraan();
echo "Status Harga : " . $objekMobil->statusharga() . "<br>";
echo "Status BBM : " . $objekMobil->dapatsubsidi() . "<br>";
echo "Harga Bekas : " . $objekMobil->hargabekas() . "<br>";
echo "Jumlah Pajak : " . $objekMobil->pajakkendaraan() . "<br>";
echo "Hari Operasi : " . $objekMobil->harioperasi() . "<br>";
?>