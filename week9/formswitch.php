<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>TODO write content</div>
        <?php
        
            $submit = filter_input(INPUT_POST, 'Submit');
            echo '<h1>',$submit,'</h1>';
        ?>
        
        <div id="loginDiv">
            <form action="#" method="POST">
                Login <input name="login" />
                <input type="submit" name="Submit" value="Login" />
            </form>
            <button onclick="SwitchToSignup()">SwitchToSignup</button>
        </div>
        
        <div id="SignupDiv">
            <form action="#" method="POST">
                signup <input name="signup" />
                <input type="submit" name="Submit" value="Signup" />
            </form>
            
             <button onclick="SwitchToLogin()">SwitchToLogin</button>
        </div>
        <?php echo $submit.'hiiii' ?>
        
        <script type="text/javascript">
            
            
            var LoginDiv = document.querySelector('#loginDiv'),
                SignupDiv = document.querySelector('#SignupDiv');   
           
           var startingForm = '<?php echo $submit ?>';
           
           if (startingForm === 'Signup') {
              SwitchToSignup();
           } else {
                SwitchToLogin();
            }   
            
            
           function SwitchToSignup(){
               LoginDiv.style.display = 'none';
               SignupDiv.style.display = 'block';
           }
           
           
           function SwitchToLogin(){
               LoginDiv.style.display = 'block';
               SignupDiv.style.display = 'none';
           }
           
       </script>
        
    </body>
</html>