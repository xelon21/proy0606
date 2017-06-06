<?php
session_start();
?>
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
        $_SESSION["val01"]="Nuevo";
        $valor02="hola";
        $_SESSION["val02"]="valor02";
        $_SESSION["val03"]=3;        
        ?>
        <a href="versesion.php">ver valores de la sesion</a
        
    </body>
</html>
