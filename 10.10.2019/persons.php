<?php
//ümardab vanuse alla
$age = floor(17.6);
echo 'Sinu vanus on '.$age.'<br>';
//kontrollib ja väljastab kas laps, täiskasvanud või penisonär
if($age <= 17){
    echo 'Sa oled laps';
}else if ($age >=18 && $age <=65 ){
    echo 'oled täiskasvanud';
}else if ($age >= 66) {
    echo 'Sa oled pensionär';
} else{
    echo 'Sisesta vanus';
}