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
        
        session_start();
        session_regenerate_id();
        
        include 'logout.php';
        
        logout::checkLogout();
        logout::confirmAccess();
        
        
        
        ?>
        
        
        <a href="?logout=1">Logout</a>
    </body>
</html>
