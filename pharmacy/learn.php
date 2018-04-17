<?php
function myTest() {
    static $x = 0;
    echo $x;
   $x++;
}

myTest();
myTest();
myTest();
myTest();

$x = array("Volvo","BMW","Toyata");
echo str_replace("volvo","car","different cars");









?>    