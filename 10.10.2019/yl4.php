<?php
$sphereRadius = $_GET['sphereRadius'];
$coneRadius = $_GET['coneRadius'];
$coneHeight = $_GET['coneHeight'];
$silinderRadius = $_GET['silinderRadius'];
$silinderHeight = $_GET['silinderHeight'];
$sphereVolume = round((4 / 3) * pi() * $sphereRadius * $sphereRadius,3);
$coneVolume = round((1 / 3) * pi() * $coneRadius * $coneRadius * $coneHeight, 3);
$silinderVolume = round(pi() * $silinderRadius * $silinderRadius * $silinderHeight, 3);
echo 'The volume of the sphere is '.$sphereVolume.' units<sup>3</sup><br>';
echo 'The volume of the cone is '.$coneVolume.' units<sup>3</sup><br>';
echo 'The volume of the silinder is '.$silinderVolume.' units<sup>3</sup><br>';