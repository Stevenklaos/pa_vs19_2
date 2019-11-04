<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            height: 2rem;
            text-align: center;
        }
        td, th {
            padding: 5px 10px;
        }
        tr th{
            background:#ff4800;
            font-weight:700;
        }
        tr td {
            background:#00b7ff;
        }
    </style>
</head>
<body>
<?php
// x is user input for degrees
//also the formulas for calculating
$C = 20;//Celsius
$F = ($C * 9 / 5) + 32;//Fahrenheit
$K = 273.15 + $C;//Kelvin
$N = $C * 0.33000;//Newtons
printf('%0.3f kraadi celsiuses on %0.3f fahrenheiti'."<br>", $C, $F);
printf('%0.3f fahrenheiti on %0.3f kraadi kelvinit'."<br>", $F, $K);
printf('%0.3f kelvinit on %0.3f newtonit', $K, $N);
echo '
    <table>
        <thead>
            <tr>
                <th>Le sentence</th>
                <th>Temperature</th>
                <th>Unit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>This is the temperature in Celsius: </td>
                <td>'.$C.'</td>
                <td>&deg;C</td>
            </tr>
            <tr>
                <td>This is the temperature in Fahrenheit: </td>
                <td>'.$F.'</td>
                <td>&deg;F</td>
            </tr>
            <tr>
                <td>This is the temperature in Kelvin: </td>
                <td>'.$K.'</td>
                <td>&deg;K</td>
            </tr>
            <tr>
                <td>This is the temperature in Newtons: </td>
                <td>'.$N.'</td>
                <td>&deg;N</td>
            </tr>
        </tbody>
    </table>
    
';
?>

</body>
</html>
