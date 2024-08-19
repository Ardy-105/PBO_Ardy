<?php
class Suhu{
    var $C = 60;
    var $F = 100;
    var $K = 300;
    var $Re = 50;

    //Fungsi Celcius to Fahrenheit
    function C_ke_F(){
        return($this->C * 9/5) + 32;
    }

    //Fungsi Celcius to Kelvin
    function C_ke_K(){
        return $this->C + 273.15;
    }

    //Fungsi Celcius to Reamur
    function C_ke_Re(){
        return $this->C * (4/5);
    }

    //Fungsi Fahrenheit to Celcius
    function F_ke_C(){
        return($this->F - 32) *(5/9);
    }
    
    //Fungsi Fahrenheit to Kelvin
    function F_ke_K(){
        return ($this->F + 459.67) * (5/9);
    }
    
    //Fungsi Fahrenheit to Reamur
    function F_ke_Re(){
        return ($this->F - 32) * (4/9);
    }

    //Fungsi Kelvin to Celcius
    function K_ke_C(){
        return $this->K - 273.5;
    }
    
    //Fungsi Kelvin to Fahrenheit
    function K_ke_F(){
        return $this->K * (9/5)- 459.67;
    }
    
    //Fungsi Kelvin to Reamur
    function K_ke_Re(){
       return ($this->K - 273.15) *(4/5);
    }

    //Fungsi Reamur to Celcius
    function Re_ke_C(){
        return $this->Re * (5/4);
    }
    
    //Fungsi Reamur to Fahrenheit
    function Re_ke_F(){
        return $this->Re * (9/4) + 32;
    }
    
    //Fungsi Reamur to Kelvin
    function Re_ke_K(){
       return $this->Re * (5/4) + 273.15;
    }
}

$suhu = new Suhu();

echo "60°C to Fahrenheit: " . $suhu->C_ke_F() . " °F";
echo "<br>";
echo "60°C to Kelvin: " . $suhu->C_ke_K() . " K";
echo "<br>";
echo "60°C to Reamur: " . $suhu->C_ke_Re() . " °Re";
echo "<br>";
echo "<br>";
echo "100°F to Celcius: " . $suhu->F_ke_C() . " °C";
echo "<br>";
echo "100°F to Kelvin: " . $suhu->F_ke_K() . " K";
echo "<br>";
echo "100°F to Reamur: " . $suhu->F_ke_Re() . " °Re";
echo "<br>";
echo "<br>";
echo "300K to Celcius: " . $suhu->K_ke_C() . " °C";
echo "<br>";
echo "300K to Fahrenheit: " . $suhu->K_ke_F() . " °F";
echo "<br>";
echo "300K to Reamur: " . $suhu->K_ke_Re() . " °Re";
echo "<br>";
echo "<br>";
echo "50Re to Celcius: " . $suhu->Re_ke_C() . " °C";
echo "<br>";
echo "50Re to Fahrenheit: " . $suhu->Re_ke_F() . " °F";
echo "<br>";
echo "50Re to Kelvin: " . $suhu->Re_ke_K() . " K";
?>