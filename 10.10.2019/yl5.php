<?php
//sorts ascending
//$lesson = array('maths','english','history','french','PE');
//
//    sort($lesson);
//    var_dump($lesson);
//$names = array(
//    'Martin',
//    'Hardi',
//    'Juhan',
//    'Tiina',
//    'Sirje',
//    'Kaie'
//);
//$ballThrows = array(
//    33,
//    32,
//    27,
//    11,
//    15,
//    28
//);
//
////counts players
//echo count($names).'<br>';
////keskmine palliviske tulemus
//echo round($averageBallThrow = array_sum($ballThrows)/count($ballThrows),3).'<br>';
////parim tulemus
//echo max($ballThrows).'<br>';
////parima tulemuse visanud ]pilane
//echo $names[0].' threw the ball the furthest at '.max($ballThrows).' m';
$books = array(
    'Book 1'=>array('title'=> 'Alphabet','Author'=>'Author 1','Genre'=>'horror','year'=>'2000'),
    'Book 2'=>array('title'=> 'Sunshine','Author'=>'Author 2','Genre'=>'comedy','year'=>'2038'),
    'Book 3'=>array('title'=> 'Sailing','Author'=>'Author 3','Genre'=>'movie','year'=>'2055')
);
sort($books);
foreach ($books as $book=>$data){
    foreach($data as $details){
        echo "$details ";
    }
    echo "<br>";
}
//mitmemõõtmelised massiivid
//$riigid = array(
//    'Eesti'=>array('pealinn'=>'Tallinn','rahvaarv'=>1340000),
//    'Austria'=>array('pealinn'=>'Viin','rahvaarv'=>8356700),
//    'Belgia'=>array('pealinn'=>'Brüssel','rahvaarv'=>10827500)
//);
//
//foreach ($riigid as $riik=>$andmed){
//    echo "$riik - ";
//    foreach($andmed as $detailid){
//        echo "$detailid ";
//    }
//    echo "<br>";
//}