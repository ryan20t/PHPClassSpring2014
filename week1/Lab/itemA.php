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
        
        //explode function
        $myString = "red blue green black white";
        $myArray = explode(" ", $myString);
        echo $myArray[0];
        echo $myArray[1];
        echo $myArray[2];
        echo $myArray[3];
        echo $myArray[4],'<br />';
        
        //sha1
        $myNewString = "apples";
        $stringHash = sha1($myNewString);
        echo "Hash of apples = ",$stringHash,'<br />';
        
        //htmlentities
        $myHtmlString = "I put <b>quotes</b> in bold.";
        echo htmlentities($myHtmlString),'<br />';
        
        //md5
        $myMd5 = md5($myNewString);
        echo "Md5 of apples = ",$myMd5.'<br />';
        
        //strip_tags
        echo "Stripped tags = ",strip_tags($myHtmlString),'<br />';
        
        //trim
        $myString2 = " Hello ";
        echo "Trimmed string = ",trim($myString2),'<br />';
        
        //ucwords
        echo "ucwords = ",ucwords($myString),'<br />';
        
        //strlen
        $length = strlen($myHtmlString);
        echo "length of my html string = ",$length,'<br />';
        
        //str_shuffle
        echo "shuffled string = ",str_shuffle($myHtmlString),'<br />';
        
        //ord
        $ascii = ord($myString);
        echo "ord = ",$ascii;
        
        ?>
        
    </body>
</html>