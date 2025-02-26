<?php
/*
$a = 5;
$b = 10;
$m = $a * $b;

echo("Obsah obdlznika sa rovna $m m<sup>2</sup>");
*/


/*
$a = 2;
$b = 10;
$c = 100;
$top = $a;

if($b > $a)
{
    $top = $b;
}

if($c > $top)
{
    $top = $c;
}

echo("Najvacsie je $top.");
*/

$vek = 60;

if($vek <= 14)
{
    echo("NIC nedostanes!");
}
else if($vek > 14 && $vek <= 17)
{
    echo("Iba likerik.");
}
else if($vek >= 50)
{
    echo("Nech sa vam paci. Platim ja.");
}
else
{
    echo("Nech sa paci.");
}


?>