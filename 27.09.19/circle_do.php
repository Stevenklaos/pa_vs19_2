<?php
// circle_do.php
$circleRadius = $_GET['circle-radius'];
// $circleRadius sisu kontroll
var_dump($circleRadius);

$sum = $circleRadius + $circleRadius;
var_dump($sum);
// arvutused
$circleArea = 3.14 * $circleRadius * $circleRadius;
$circleCircumference = 3.14 * 2 * $circleRadius;
// ümardamine
$circleAreaRounded = round($circleArea, precision:3);
// print
echo 'Raadius = '.$circleRadius. '<br>';
echo '<hr>';
echo 'Ringi pindala = '.$circleArea.'<br>';
echo 'Ringi ümbermõõt = '.$circleCircumference.'<br>';
