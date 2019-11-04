<?php
/*koosta programm mis hoiab muutujatena j2rgmised andmed
 * eesnimi
 * perenimi
 * vanus
 * pikkus meetrites
 * kaal kilogrammides
 * v2ljasta k]ik vajalik info ka
*/
$eesNimi = 'Almar';
$perenimi = 'Kaarend';
$vanus = 21;
$pikkus = 1.88;
$kaal = 95;
echo '<h1>Minu andmed</h1>';
echo 'Eesnimi: '.$eesNimi.'<br>';
echo 'Perenimi: '.$pereNimi.'<br>';
echo 'Vanus: '.$vanus.'<br>';
echo 'Pikkus: '.$pikkus.'<br>';
echo 'Kaal: '.$kaal.'<br>';
//avaldised
//$muutuja = v22rtus;
$kmi = $kaal / ($pikkus * $pikkus);
echo 'Minu kehamassiindek: '.$kmi.'<br>';