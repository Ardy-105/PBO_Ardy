<?php
class manusia
{
    public $nama = "Ardy";
    var $kelas = "SI 2";
    function tampilkan_nama()
    {
        return $this->nama;
    }
    public function tampilakan_kelas()
    {
        return $this->kelas;
    }
}
$manusia = new manusia();
echo "Nama : " . $manusia->tampilkan_nama() . "<br/>";
echo "Kelas : " . $manusia->tampilakan_kelas() . "<br/>";
?>