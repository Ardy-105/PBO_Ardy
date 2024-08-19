<?php
class Guru {
    var $nama_nama = array("de","ce","ve","re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

class Murid {
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;
}

class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

class Mobil {
    var $jumlahRoda = 4;
    var $warna = "Merah";
    var $bahanBakar = "Pertamax";
    var $harga = 120000000;
    var $merek = 'A';

    public function statusHarga() {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$BMW = new Mobil(); // ini adalah objek BMW dari class mobil
$Tesla = new Mobil(); // ini adalah objek Tesla dari class mobil
$Audi = new Mobil(); // ini adalah objek Audi dari class mobil

echo "Status Harga BMW : " .$BMW->statusHarga(). "\n";
echo "<br>";
echo "Status Harga Tesla : " .$Tesla->statusHarga(). "\n";
echo "<br>";
echo "Status Harga Audi : " .$Audi->statusHarga(). "\n";
?>