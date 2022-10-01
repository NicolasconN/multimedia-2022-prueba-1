<?php 

$a = $_POST['a']; 
$b = $_POST['b']; 
$c = $_POST['c']; 



if(empty($a)){
    $a = 1;
}
if(empty($b)){
    $b = 4;
}   
if(empty($c)){
    $c = 3;
}

$raiz = sqrt(($b**2) - 4*$a*$c);
$x1 = (-($b) + $raiz)/(2*$a);
$x2 = (-($b) - $raiz)/(2*$a);

echo"X1: $x1 <br>";
echo"X2: $x2";