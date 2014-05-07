<?php include 'dependency.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <?php
        $msg = '';
        if ( !isset($_SESSION['validcode']) )
        {
            $_SESSION['validcode'] = false;
        }
        
        if ( UTIL::isPostRequest() )
        {
            $checkcode = new Passcode();
            if ( $checkcode->isValidPasscode() )
            {
                $_SESSION['validcode'] = false;
                Util::redirect('viewaddress');
                die();
            }
            else
            {
                $msg = 'Passcode is not valid.';
            }
        }//end if

        if (!empty($msg))
        {
            echo '<p>', $msg, '</p>';
        }
        ?><form name="mainform" action="#" method="post">
            <legend>Data Form:</legend>
            <label for="code">Passcode</label>
            <input type="password" name="passcode" id="code" />
            
            <input type="submit" value="Submit" />
        </form> 
    </body>
</html>