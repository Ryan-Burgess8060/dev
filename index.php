<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Ryan Burgess">
        <title>Ryan's Calculator</title>
        <link href="css/Style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $hn = "localhost";
            $dn = "Logs";
            $user = "phpmyadmin";
            $pass = "maximus8060";
            $myDBconnection = new PDO("mysql:host=$hn;dbname=$dn", $user, $pass);
            $query = "INSERT INTO log (sitetype, date) VALUES ('A user has accessed the main site', NOW())";
            $dbquery = $myDBconnection -> prepare($query);
            $dbquery -> execute();
        ?>
        <script>
            function equal(x) {
            try {
              return eval(x);
            } catch(err) {
                return "Error";
            } }
        </script>
        <form class="calculator" name="calc">
            <input class="value" type="text" name="txt" readonly="">
            <span class="num clear" onclick="document.calc.txt.value =''">Clear</span>
            <span class="num equals" onclick="document.calc.txt.value = equal(calc.txt.value)">=</span>
            <span class="num" onclick="document.calc.txt.value +='7'">7</span>
            <span class="num" onclick="document.calc.txt.value +='8'">8</span>
            <span class="num" onclick="document.calc.txt.value +='9'">9</span>
            <span class="num sym" onclick="document.calc.txt.value +='+'">+</span>
            <span class="num" onclick="document.calc.txt.value +='4'">4</span>
            <span class="num" onclick="document.calc.txt.value +='5'">5</span>
            <span class="num" onclick="document.calc.txt.value +='6'">6</span>
            <span class="num sym" onclick="document.calc.txt.value +='-'">-</span>
            <span class="num" onclick="document.calc.txt.value +='1'">1</span>
            <span class="num" onclick="document.calc.txt.value +='2'">2</span>
            <span class="num" onclick="document.calc.txt.value +='3'">3</span>
            <span class="num sym" onclick="document.calc.txt.value +='*'">X</span>
            <span class="num" onclick="document.calc.txt.value +='.'">.</span>
            <span class="num" onclick="document.calc.txt.value +='0'">0</span>
            <span class="num sym" onclick="document.calc.txt.value +='**'">^</span>
            <span class="num sym" onclick="document.calc.txt.value +='/'">/</span>
        </form>
    </body>
</html>
