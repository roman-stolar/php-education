<?php
session_start();
//phpinfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Education</title>
</head>
    <body>
        <?php 
            require_once('./pages/header.php');  
        ?>
        <section>
            <?php
                require_once('./pages/dashboard.php');
            ?>
        </section>
    </body>
</html>
