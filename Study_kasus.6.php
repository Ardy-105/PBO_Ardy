<?php
class Pola_Segitiga
{


    public function pola_pertama()
    {
        for ($i = 1; $i < 6; $i++) {
            for ($j = $i; $j <= 6; $j++) {
                echo "&nbsp;" . "&nbsp;" . "&nbsp;";
            }
            for ($j = 1; $j <= $i; $j++) {
                echo "&nbsp;" . "*";
                echo "&nbsp;" . "*";
            }
            echo "<br />";
        }
    }

    public function pola_kedua()
    {
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*" . "&nbsp;";
            }

            echo "<br />";
        }
        for ($i = 5; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*" . "&nbsp;";
            }

            echo "<br />";
        }
    }

    public function pola_ketiga()
    {
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 5; $j > $i; $j--) {
                echo "&nbsp;" . "&nbsp;" . "&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "&nbsp;" . "*";
            }
            echo "<br />";
        }
        for ($i = 5; $i >= 1; $i--) {
            for ($j = 5; $j > $i; $j--) {
                echo "&nbsp;" . "&nbsp;" . "&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "&nbsp;" . "*";
            }
            echo "<br />";
        }
    }
}

$Segitiga = new Pola_Segitiga();
echo "Pola Segitiga Pertama : " . "<br/>";
echo $Segitiga->pola_pertama() . "<br/>";
echo "Pola Segitiga Kedua : " . "<br/>";
echo $Segitiga->pola_kedua() . "<br/>";
echo "Pola Segitiga Ketiga : " . "<br/>";
echo $Segitiga->pola_ketiga() . "<br/>";
?>