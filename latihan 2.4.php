<?php
$x = 5;
$y = 10;

function myTest(){
    global $x, $y;
    $y = $x + $y;
}
myTest();
echo $y;
?>

<?php
$x = 5;
$y = 10;
function myTest1(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y;
?>