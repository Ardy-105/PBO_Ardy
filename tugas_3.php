<?php
class Pinjaman
{
    var $besaranPinjaman = 1000000;
    var $besaranBunga = 0.1;
    var $lamaAngsuran = 5;
    var $keterlambatan = 40;
    var $dendaperhari = 0.15;

    function Total_Pinjaman()
    {
        return $this->besaranPinjaman + ($this->besaranPinjaman * $this->besaranBunga);
    }

    function Besar_Angsuran()
    {
        $totalpinjaman = $this->Total_Pinjaman();
        $AngsuranperBulan = $totalpinjaman / $this->lamaAngsuran;
        return $AngsuranperBulan;
    }

    function Denda_Terlambat()
    {
        return $this->keterlambatan * ($this->Besar_Angsuran() * $this->dendaperhari / 100);
    }
    function Besaran_Pembayaran()
    {
        return $this->Besar_Angsuran() + $this->Denda_Terlambat();
    }
}

$ObjekPinjaman = new Pinjaman();
echo ("TOKO PEGADAIAN SYARIAH") . "<br>";
echo ("Jl.Keadialan No.16") . "<br>";
echo ("Telp. 72353459") . "<br>";
echo "<br>";
echo "Besaran Pinjaman : Rp " . number_format($ObjekPinjaman->besaranPinjaman) . "<br>";
echo "Bunga sebesar : 10%" . "<br>";
echo "Total Pinjaman : Rp " . number_format($ObjekPinjaman->Total_Pinjaman()) . "<br>";
echo "Lama Angsuran : " . $ObjekPinjaman->lamaAngsuran . " bulan" . "<br>";
echo "Besaran Angsuran : Rp " . number_format($ObjekPinjaman->Besar_Angsuran()) . "<br>";
echo "Denda Keterlambatan : Rp " . number_format($ObjekPinjaman->Denda_Terlambat()) . "<br>";
echo "Total Pembayaran : Rp " . number_format($ObjekPinjaman->Besaran_Pembayaran());
?>