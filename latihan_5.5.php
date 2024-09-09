<?php

$pembeli1 = array("Pembeli 1", true, 200000);
$pembeli2 = array("Pembeli 2", true, 570000);
$pembeli3 = array("Pembeli 3", false, 120000);
$pembeli4 = array("Pembeli 4", false, 90000);

function hitungDiskon($nama, $kartu_member, $total_belanja)
{
    $diskon = 0;

    if ($kartu_member) {
        switch (true) {
            case ($total_belanja > 500000):
                $diskon = 50000;
                break;
            case ($total_belanja > 100000):
                $diskon = 15000;
                break;
            default:
                $diskon = 0;
                break;
        }
    } elseif ($total_belanja > 100000) {
        $diskon = 5000;
    }

    $biaya_akhir = $total_belanja - $diskon;

    echo "$nama : Total Belanja: Rp$total_belanja, Diskon: Rp$diskon, Biaya Akhir: Rp$biaya_akhir" . "<br><br>";
}

$pembeli = 1;

switch ($pembeli) {
    case 1:
        hitungDiskon($pembeli1[0], $pembeli1[1], $pembeli1[2]);
    case 2:
        hitungDiskon($pembeli2[0], $pembeli2[1], $pembeli2[2]);
    case 3:
        hitungDiskon($pembeli3[0], $pembeli3[1], $pembeli3[2]);
    case 4:
        hitungDiskon($pembeli4[0], $pembeli4[1], $pembeli4[2]);
        break;
    default:
        echo "Tidak ada pembeli lagi";
}

?>