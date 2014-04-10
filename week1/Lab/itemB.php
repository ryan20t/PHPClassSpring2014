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
        
        //array_count_values
        $myArray = array( 30, 20, 10 );
        print_r(array_count_values($myArray));
        
        //array_flip
        $flippedArray = array_flip($myArray);
        echo '<br />';
        print_r($flippedArray);
        
        //array_key_exists
        if (array_key_exists( 50, $myArray ) )
        {
            echo '<br />',"The 50 element is in the array.";
        } else {echo '<br />',"50 does not exist";}
        
        //array_map
        function cube($n)
        {
            return($n * $n * $n);
        }
        $b = array_map("cube", $myArray);
        echo '<br />';
        print_r($b);
        
        //array_rand
        $randKeys = array_rand( $myArray, 2 );
        echo '<br />';
        print_r($randKeys);
        
        //array_push
        array_push( $myArray, 40 );
        echo '<br />';
        print_r($myArray);
        
        //in_array
        if (in_array( 30, $myArray, false ) )
        {
            echo '<br />',"The 30 element is in the array.";
        } else {echo '<br />',"30 does not exist";}
        
        //shuffle
        shuffle($myArray);
        echo '<br />';
        foreach ($myArray as $key => $val)
        {
            echo "shuffled[" , $key , "] = " , $val , '<br />';
        }
        
        //count/sizeof
        $numElements = count($myArray);
        echo '<br />',"The number of elements in my array is ",$numElements;
        
        //sort
        sort($myArray);
        echo '<br />';
        foreach ($myArray as $key => $val)
        {
            echo "myArray[" , $key , "] = " , $val , '<br />';
        }
        
        ?>
    </body>
</html>