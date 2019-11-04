<?php
$numberOne = (int)$_GET['NumberOne'];
$numberTwo = (int)$_GET['$numberTwo'];
var_dump($numberOne);
if(strlen($numberOne) > 0 and strlen($numberTwo) > 0) {
    echo 'andmed olemas';
} else {
    echo 'Tuleb sisestada mõlemad numbrid<br>';
}