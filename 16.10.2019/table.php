<?php
for($row = 1; $row < 6; $row++){
    echo $row;
    for($col = 1; $col < 4; $col++){
        echo '&nbsp;';
    }
    for($col = 1; $col < 4; $col++){
        echo '*&nbsp;';
    }
    echo '<br>';
}