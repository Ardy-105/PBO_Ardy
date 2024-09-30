<?php
class UTS
{
    private $bangun_ruang = [
        1 => "Persegi",
        2 => "Persegi Panjang",
        3 => "Segitiga",
        4 => "Lingkaran",
        5 => "Belah Ketupat",
    ];
    var $username = "Ardy";
    var $password = "1Ards";
    var $sisi;
    var $panjang;
    var $lebar;
    var $alas;
    var $tinggi;
    var $jari;
    var $diagonal1;
    var $diagonal2;
    var $luas;

    public function __construct($username, $password, $bangun_ruang, $sisi, $panjang, $lebar, $alas, $tinggi, $jari, $diagonal1, $diagonal2)
    {
        $this->username = $username;
        $this->password = $password;
        $this->bangun_ruang = $bangun_ruang;
        $this->sisi = $sisi;
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->jari = $jari;
        $this->diagonal1 = $diagonal1;
        $this->diagonal2 = $diagonal2;
        $this->luas = $this->luas_persegi();
        $this->luas = $this->luas_persegipanjang();
        $this->luas = $this->luas_segitiga();

    }
    function luas_persegi()
    {
        return $this->sisi * $this->sisi;
    }
    function luas_persegipanjang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    function luas_segitiga()
    {
        $luas = $this->alas * $this->tinggi / 2;
        return $luas;
    }
    function luas_lingkaran()
    {
        $luas = pi() * pow($this->jari, 2);
        return $luas;
    }
    function luas_BelahKetupat()
    {
        $luas = ($this->diagonal1 * $this->diagonal2) / 2;
        return $luas;
    }
    function get_user()
    {
        return $this->username;
    }
    function get_pw()
    {
        return $this->password;
    }
    function get_sisi()
    {
        return $this->sisi;
    }
    function get_panjang()
    {
        return $this->panjang;
    }
    function get_lebar()
    {
        return $this->lebar;
    }
    function get_alas()
    {
        return $this->alas;
    }
    function get_tinggi()
    {
        return $this->tinggi;
    }
    function get_luas()
    {
        return $this->luas;
    }

}
$usernamelist = new UTS($username, $password, $bangun_ruang, $sisi, $panjang, $lebar, $alas, $tinggi, $jari, $diagonal1, $diagonal2);
while (true) {
    echo "Selamat datang di Aplikasi Bangun Ruang CLI.\n";
    echo "Silahkan Login terlebih dahulu: \n";
    echo "Masukkan Username: ";
    $username = trim(fgets(STDIN));
    if (strtolower($username) == 'y/n') {
        break;
    }
    echo "Masukkan password: ";
    $password = trim(fgets(STDIN));
    if (strtolower($password) == 'y/n') {
        break;
    }
    echo "Selamat datang anda telah berhasil login di Aplikasi Bangun Ruang CLI.\n";
    echo "Silahkan pilih salah satu bangun ruang: \n";
    echo "Pilih nomor bangun ruang (1,2,3,4,5): \n";
    $bangun_ruang = (int) trim(fgets(STDIN));
    echo "Anda memilih bangun ruang $bangun_ruang \n";
    echo "Masukkan sisi persegi (cm): ";
    $sisi = (int) trim(fgets(STDIN));
    echo "Luas Persegi = " . $usernamelist->luas_persegi() . "cm2\n";

}
?>