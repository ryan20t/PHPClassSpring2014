<!DOCTYPE html>
<!--
Using PHP try to see how you would solve the issue of putting an error class
into each input.  I created the class for you, and the solution is solved
but in the refactoring phase there has to be a better way.  Also make sure
to populate the post values back into the field. 

Goals:
1.  Re-populate post values into the input fields.
2.  Put the "inputerror" class into the input form fields if 
    they are not populated on a post.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .error {
                border: 1px solid red;
                padding: 0.2em;
                color: red;
            }
            
            .inputerror {
                border: 1px solid red;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        //print_r($_POST);
            if ( !empty($_POST)) {
                
                $errorMessages = array(
                  "email" => 'email is invalid',  
                  "username" => 'username is not found',  
                  "password" => 'password does not work'  
                );
                
                //variable to hold posted data
                $email = filter_input(INPUT_POST, 'email');
                $username = filter_input(INPUT_POST, 'username');
                //$password = filter_input(INPUT_POST, 'password');
                
                //blank variables to hold inputerror class
                $inputEmailErrorClass = "";
                $inputUsernameErrorClass = "";
                $inputPasswordErrorClass = "";
                
                //if empty input, add inputerror class to variable to be echoed
                if (empty($email)) {
                    $inputEmailErrorClass = "class='inputerror'";
                }//end if
                
                if (empty($username)){
                    $inputUsernameErrorClass = "class='inputerror'";
                }//end if
                
                if (empty($password)){
                    $inputPasswordErrorClass = "class='inputerror'";
                }//end if
             }//end if
        ?>
        
        
        <h2> My Form Demo </h2>
       <form name="mainform" action="#" method="post">            
           Email: <input type="text" <?php echo $inputEmailErrorClass ?> name="email" value="<?php echo $email; ?>" /> <br /> 
            <?php 
            if ( !empty($errorMessages["email"]) ) 
                echo '<p class="error">',$errorMessages["email"], '</p>';
            ?>
            Username: <input type="text" <?php echo $inputUsernameErrorClass ?> name="username" value="<?php echo $username; ?>" /> <br /> 
            <?php 
            if ( !empty($errorMessages["username"]) )
                echo '<p class="error">',$errorMessages["username"], '</p>';                
            ?>           
            Password: <input type="password" <?php echo $inputPasswordErrorClass ?> name="password" /> <br />
            <?php 
            if ( !empty($errorMessages["password"]) )
                echo '<p class="error">',$errorMessages["password"], '</p>';                
            ?>
            <br />
            <input type="submit" value="Submit" />                        
        </form>
    </body>
</html>