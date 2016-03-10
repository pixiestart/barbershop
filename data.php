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
        if(isset($_GET['param'])){
            //$controller->directory($_GET['param']);
            echo $_GET['param'];           
            echo $_GET['param2'];
        }
        else{
           //$controller->directory('home');
        }
        ?>
        Data Page
    </body>
</html>
