<?php

$people = array(
    "Alex" => "15 mayo 1999",
    "Daniel" => "10 marzo 1991",
    "Annie " => "5 junio 2022",
    "William" => "21 octubre 2000"
);

foreach ($people as $key => $value) {
    echo "$key   nació el:   $value <br>" ;
}


echo $hoy = strtotime(date("d-m-Y h:i:s"));
echo $fechaN = strtotime("17 may 2023");
$edad = $hoy - $fechaN;

$años = floor ($edad / (365 * 24 * 60 * 60));
$meses = floor (($edad % (365 * 24 * 60 * 60)) / (30 * 24 * 60 * 60));
$dias = floor (($edad % (30 * 24 * 60 * 60)) / (24 * 60 * 60));

echo "Señor(a) $key usted tiene $años años, $meses meses y $dias dias ";
