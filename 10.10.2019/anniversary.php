<?php
$birthYear = 2004;
$currentYear = 2019;
$age = $currentYear - $birthYear;
$anniversary = $age % 5;
echo $age.'<br>';
if($anniversary != 0){
    echo 'not aniversary';
}else{
    echo 'aniversary';
}