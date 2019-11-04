<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .frac {
            display: inline-block;
            position: relative;
            vertical-align: middle;
            letter-spacing: 0.001em;
            text-align: center;
        }
        .frac > span {
            display: block;
            padding: 0.1em;
        }
        .frac span.bottom {
            border-top: thin solid black;
        }
        .frac span.symbol {
            display: none;
        }
    </style>
    <title>Document</title>
</head>
<body>
<h1>Volume of geometric shapes</h1>
<form action="yl4_2_action.php" method="get">
    <p>Volume of a sphere:</p>
        <div class="frac">
            <span>4</span>
            <span class="symbol">/</span>
            <span class="bottom">3</span>
        </div>
        <p>&pi;*r<sup>3</sup></p>
    <p>Volume of a cone: </p>
        <div class="frac">
            <span>1</span>
            <span class="symbol">/</span>
            <span class="bottom">3</span>
        </div>
        <p>&pi;*r<sup>2</sup>*h</p>
    <p>Volume of a silinder: <br>&pi;*r<sup>2</sup>*h</p>
    <!--Sphere: radius-->
    <h2>Sphere</h2>
    <label for="sphereRadius">Enter the radius of the sphere: <br></label>
    <input type="text" id="sphereRadius" name="sphereRadius" autocomplete="off"><br>
    <br>
    <!--Cone: radius and height-->
    <h2>Cone</h2>
    <label for="coneRadius">Enter the radius of the cone: <br></label>
    <input type="text" id="coneRadius" name="coneRadius" autocomplete="off"><br>
    <br>
    <label for="coneHeight">Enter the height of the cone: <br></label>
    <input type="text" id="coneHeight" name="coneHeight" autocomplete="off"><br>
    <br>
    <!--Silinder: radius and height-->
    <h2>Silinder</h2>
    <label for="silinderRadius">Enter the radius of the silinder: <br></label>
    <input type="text" id="silinderRadius" name="silinderRadius" autocomplete="off"><br>
    <br>
    <label for="silinderHeight">Enter the height of the silinder: <br></label>
    <input type="text" id="silinderHeight" name="silinderHeight" autocomplete="off"><br>
    <br>
    <input type="submit" value="Saada">
</form>
<?php
?>
</body>
</html>