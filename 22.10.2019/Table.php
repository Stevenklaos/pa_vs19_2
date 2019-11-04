<?php
function tableRow($colNumber) {
    echo '<tr>';
        for($col = 1; $col <= $colNumber; $col++) {
            echo '<td>';
            echo 'cell';
            echo '</td>';
        }
    echo '</tr>';
}
function tableHeader($colNumber){

}
function table($rowNumber, $colNumber) {
    echo '<table>';
        echo '<tbody>';
        for($row = 1; $row <= $rowNumber; $row++) {
            tableRow($colNumber);
        }
        echo '</tbody>';
     echo '</table>';
}
table(5, 4);