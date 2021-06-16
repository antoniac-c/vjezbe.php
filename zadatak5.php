<?php


// U izbornik postaviti poziv stranice zadatak5.php?broj=2&ime=4&t=9
// stranica ispisuje najveći primljeni broj

$broj=$_GET['broj'];
$ime=$_GET['ime'];
$t=$_GET['t'];
$t=2; $broj=2; $ime=2;
if($broj>$ime && $broj>$t){
    echo $broj;
}elseif($ime>$broj && $ime>$t){
    echo $ime;
}elseif($t>$broj && $t>$ime){
    echo $t;
}else{
    echo 'jednaki su';
}
?>

