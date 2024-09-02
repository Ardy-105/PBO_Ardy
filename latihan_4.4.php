<?php

$buah = array('semangka', 'jeruk', 'apel', 'anggur');
echo $buah[2] . "<br><br>";
?>

<?php
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";
echo $buah['jeruk'] . "<br><br>";
?>

<?php
$buah = array(
    'semangka' => "isinya merah",
    'jeruk' => "rasanya manis",
    'apel' => "warnanya merah",
    'anggur' => "harganya mahal"
);
echo $buah['jeruk'];
?>