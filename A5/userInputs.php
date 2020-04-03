<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $name = $_POST["name"];
        $numCoffee = $_POST["numCoffee"];
        $size = $_POST["size"];
        $numCreams = $_POST["numCreaSms"];
        $numSugar = $_POST["numSugar"];
        $regular = $_POST["regular"];
        $doubleDouble = $_POST["doubledouble"];
        $tripleTriple = $_POST["tripletriple"];
        $black = $_POST["black"];
        $blkOneSugar = $_POST["blkOneSugar"];
        $blkTwoSugar = $_POST["blkTwoSugar"];
        $blkThreeSugar = $_POST["blkThreeSugar"];

        echo "Thank you for your order!";


        //Number of coffees + sizes
        //small
        if (($numCoffee == 1) && ($size == "small")) {
            echo "<img src=images/cupSmall.jpg>";
        } elseif (($numCoffee == 2) && ($size == "small")) {
            echo "<img src=images/cupSmall.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cupSmall.jpg>";
        } elseif (($numCoffee == 3) && ($size == "small")) {
            echo "<img src=images/cupSmall.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cupSmall.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cupSmall.jpg>";
        }

        //medium
        if (($numCoffee == 1) && ($size == "medium")) {
            echo "<img src=images/cup.jpg>";
        } elseif (($numCoffee == 2) && ($size == "medium")) {
            echo "<img src=images/cup.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cup.jpg>";
        } elseif (($numCoffee == 3) && ($size == "medium")) {
            echo "<img src=images/cup.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cup.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cup.jpg>";
        }

        //Large
        if (($numCoffee == 1) && ($size == "large")) {
            echo "<img src=images/cupLarge.jpg>";
        } elseif (($numCoffee == 2) && ($size == "large")) {
            echo "<img src=images/cupLarge.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cupLarge.jpg>";
        } elseif (($numCoffee == 3) && ($size == "large")) {
            echo "<img src=images/cupLarge.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cupLarge.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cupLarge.jpg>";
        }

        //cream
        if ($numCreams == 1) {
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cream.jpg>";
        } elseif ($numCreams == 2) {
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cream.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cream.jpg>";
        } elseif ($numCreams == 3) {
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cream.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cream.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/cream.jpg>";
        }

        //sugar
        if ($numSugar == 1) {
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/sugar.jpg>";
        } elseif ($numSugar == 2) {
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/sugar.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/sugar.jpg>";
        } elseif ($numSugar == 3) {
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/sugar.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/sugar.jpg>";
            echo "<img src=images/plus.jpg>";
            echo "<img src=images/sugar.jpg>";
        }

        ?>
    </body>
</html>
