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
    var $username;
    var $password;
    var $sisi;
    var $panjang;
    var $lebar;
    var $alas;
    var $tinggi;
    var $jari;
    var $diagonal1;
    var $diagonal2;
    var $luas;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function set_values($sisi = 0, $panjang = 0, $lebar = 0, $alas = 0, $tinggi = 0, $jari = 0, $diagonal1 = 0, $diagonal2 = 0)
    {
        $this->sisi = $sisi;
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->jari = $jari;
        $this->diagonal1 = $diagonal1;
        $this->diagonal2 = $diagonal2;
    }

    function luas_persegi()
    {
        return $this->sisi * $this->sisi;
    }

    function luas_persegipanjang()
    {
        return $this->panjang * $this->lebar;
    }

    function luas_segitiga()
    {
        return $this->alas * $this->tinggi / 2;
    }

    function luas_lingkaran()
    {
        return pi() * pow($this->jari, 2);
    }

    function luas_belahketupat()
    {
        return ($this->diagonal1 * $this->diagonal2) / 2;
    }

    function get_luas($choice)
    {
        switch ($choice) {
            case 1:
                return $this->luas_persegi();
            case 2:
                return $this->luas_persegipanjang();
            case 3:
                return $this->luas_segitiga();
            case 4:
                return $this->luas_lingkaran();
            case 5:
                return $this->luas_belahketupat();
            default:
                return "Pilihan tidak valid.";
        }
    }
}

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

    $user = new UTS($username, $password);
    echo "Selamat datang anda telah berhasil login di Aplikasi Bangun Ruang CLI.\n";
    echo "Silahkan pilih salah satu bangun ruang: \n";
    echo "1. Persegi\n";
    echo "2. Persegi Panjang\n";
    echo "3. Segitiga\n";
    echo "4. Lingkaran\n";
    echo "5. Belah Ketupat\n";
    echo "Pilih nomor bangun ruang (1,2,3,4,5): ";
    $bangun_ruang = (int) trim(fgets(STDIN));

    // Ambil nilai sesuai pilihan
    switch ($bangun_ruang) {
        case 1:
            echo "Masukkan sisi persegi (cm): ";
            $sisi = (int) trim(fgets(STDIN));
            $user->set_values($sisi);
            break;
        case 2:
            echo "Masukkan panjang (cm): ";
            $panjang = (int) trim(fgets(STDIN));
            echo "Masukkan lebar (cm): ";
            $lebar = (int) trim(fgets(STDIN));
            $user->set_values(0, $panjang, $lebar);
            break;
        case 3:
            echo "Masukkan alas (cm): ";
            $alas = (int) trim(fgets(STDIN));
            echo "Masukkan tinggi (cm): ";
            $tinggi = (int) trim(fgets(STDIN));
            $user->set_values(0, 0, 0, $alas, $tinggi);
            break;
        // Tambahkan input untuk bangun ruang lainnya
    }

    echo "Luas = " . $user->get_luas($bangun_ruang) . " cm2\n";
    break;
}
?>