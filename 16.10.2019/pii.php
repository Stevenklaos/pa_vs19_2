<?php
$maxCount=10;
$count=1;
$sum=0;
while($count<=$maxCount){
    $element= 1 / (2 * $count -1);
    if($count % 2 != 0){
     $sum=$sum +$element;
    }else{
        $sum=$sum-$element;
    }
}
echo 'pi = '.($sum * 4);
echo 'pi='.pi();