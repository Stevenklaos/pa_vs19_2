<?php
//circle_do.php
$circleRadius = $_GET['circle-radius'];
//$circleRadius sisu kontroll
//var_dump($circleRadius);
//$sum = $circleRadius + $circleRadius;
//var_dump($sum);
$circleArea = round(pi() * $circleRadius * $circleRadius, 3);
$circleCircumference =  round(pi() * 2 * $circleRadius,3);
//{mardamine
//
//print
echo 'Ringi raadius: '.$circleRadius.'<br>';
echo '<hr>';
echo 'Ringi pindala: '.$circleAreaRounded.'<br>';
echo 'Ringi ümbermõõt: '.$circleCircumference.'<br>';