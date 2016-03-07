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
        include'./controller/Controller.php';
        $controller = new Controller();

        if (isset($_GET['param'])) {
            if (isset($_GET['param2'])) {
                echo $_GET['param'];
                echo $_GET['param2'];
//                $controller->directory($_GET['param'], $_GET['param2']);
            } else {
                $controller->setDirectory($_GET['param']);
                echo $_GET['param'];
            }
        } else {
//           $controller->directory('home');
        }
        ?>
        Index Page

        <?php
        //echo $controller->getTime_Date_TimeStap("s");
        echo "Created date is " . date("smYdhi") . "<br/>";
        echo $controller->getBaseURL();
        echo "<br/>";
        $email = $controller->checkExistingUser("tokjohn@gmail.com");
        print_r($email['email']);
        ?>
    </body>
</html>
