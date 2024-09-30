<?php
class manusia
{
    var $nama;
    var $warna;
    function __construct()
    {
        echo "ini adalah isi method constract <br/>";
    }
    function __destruct()
    {
        echo "ini adalah isi method destruct <br/>";
    }
    function tampilkan_nama()
    {
        return "Nama saya mahasiswa SI <br/>";
    }
}
$Manusia = new manusia();
echo $Manusia->tampilkan_nama();
?>