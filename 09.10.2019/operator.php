<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th{
            background: orange;
        }
        td{
            background: limegreen;
            padding-right:20px;
        }
    </style>
</head>
<body>
<?php
$x = 8;
$y = 2;
$sum = $x + $y;
$diff = $x - $y;
$product = $x * $y;
$division = $x / $y;
$residue = $x % $y;
echo ' 
    <table>
        <thead>
            <tr>
                <th>Valem</th>
                <th>Nimetus</th>
                <th>Tehe</th>
                <th>Vastus</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td>x + y</td>
                <td>Lahutamine</td>
                <td>'.$x.' + '.$y.'</td>
                <td>'.$sum.'</td>
            </tr>
            <tr>
                <td>x - y</td>
                <td>Lahutamine</td>
                <td>'.$x.' - '.$y.'</td>
                <td>'.$diff.'</td>
            </tr>
            <tr>
                <td>x * y</td>
                <td>Korrutamine</td>
                <td>'.$x.' * '.$y.'</td>
                <td>'.$product.'</td>
            </tr>
            <tr>
                <td>x / y</td>
                <td>Jagamine</td>
                <td>'.$x.' / '.$y.'</td>
                <td>'.$division.'</td>
            </tr>
            <tr>
                <td>x / y</td>
                <td>Jääk</td>
                <td>'.$x.' % '.$y.'</td>
                <td>'.$residue.'</td>
            </tr>
        </tbody>
    </table>
';
?>
</body>
</html>