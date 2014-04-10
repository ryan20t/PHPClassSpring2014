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
        
        $tableLength = 100;
        date_default_timezone_set("America/New_York");
        
        echo "<table border='1'>";
        for ( $i = 0; $i < $tableLength; $i++ ) {
            if ( $i % 2 ) {
                echo "<tr class='evenNums'>","<td>",$i + 1,"</td>","<td>",date( "F j, Y, g:i a" ),"</td>","</tr>";
            } else {
                echo "<tr class='oddNums'>","<td>",$i + 1,"</td>","<td>",date( "F j, Y, g:i a" ),"</td>","</tr>";
            } //end if
        }
        echo "</table>";
        
        ?>
        
        <style> .evenNums { background-color: silver } </style>
        
    </body>
</html>