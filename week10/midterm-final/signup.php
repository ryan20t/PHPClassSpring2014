<?php include 'dependency.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SaaS Project - Sign-up</title>
         <link rel="stylesheet" type="text/css" href="css/admin.css" />
    </head>
    <body>
        
        <?php
        
        $signup = new Signup();
                    
        $dataModel = new SignupModel(filter_input_array(INPUT_POST));
              
        $login = new Login();
        
        if ( ! isset($_SESSION['validcode']) ) {
                $_SESSION['validcode'] = false;   
            }
        
        
        if (isset($_POST['Signup'])){
            if ( Util::isPostRequest() ) {
                if (       Validator::emailIsValid(filter_input(INPUT_POST, 'email'))
                          && Validator::websiteIsValid(filter_input(INPUT_POST, 'website'))
                          && Validator::passwordIsValid(filter_input(INPUT_POST, 'password'))){
                    $id = $signup->save($dataModel);
                    if ($id)
                    { 
                        $_SESSION['validcode'] = true;
                        $site = $login->getSiteName();
                        header("Location: admin.php?site=$site");
                    }
                }
            }
        }
        else if (isset($_POST['Login']))
        { 
            $submit = "Signup";
            if ( Util::isPostRequest() ){
                if ($login->emailTaken($dataModel)){
                    if ($login->loginInfoIsCorrect($dataModel)){
                        $_SESSION['validcode'] = true;
                        
                        $site = $login->getSiteName();
                        header("Location: admin.php?site=$site");
                    }
                    
                     
                }
            }
            
            
        }
        ?>
        
        <h1 id="logo"><span>&#x2728;</span>SaaS Project</h1>
        
        <fieldset id="signup">
            <legend>Signup</legend>
            <p> Already a member? <button onclick="SwitchToLogin()">Login</button></p>
        <form name="mainform" action="#" method="post">
            
             
                         <label>Web Site:</label> <input type="text" class="website" name="website" maxlength="30" value="<?php echo $dataModel->getSitename(); ?>"/> 
                         <span class="sitenametaken"></span><br />
            
                          <label>Email:</label> <input type="text"  name="email" value = "<?php echo $dataModel->getEmail(); ?>"/>
                          <br />
                          
                          <label>Password:</label> <input type="password" name="password" /> <br />
               
            <input type="submit" name="Signup" value="Signup" />
                        
        </form>
        </fieldset>
        
        
        <fieldset id="login">
            <legend>Login</legend>
            <p> Not a member? <button onclick="SwitchToSignup()">Signup</button></p>

                        
            <form name="mainform" action="#" method="post">

                <label>Email:</label> <input type="text" name="email" class="email" value="<?php echo $dataModel->getEmail(); ?>"/> 
                <span class="emailInUse"></span><br />
                
                <label>Password:</label> <input type="password" name="password" /> <br />

                <input type="submit" name="Login" value="Login" />

            </form>
        </fieldset>
        
        
        <script type="text/javascript">
            
            
            var LoginDiv = document.querySelector('#login'),
                SignupDiv = document.querySelector('#signup');   
           
           var startingForm = '<?php echo $submit ?>';
           
           
           if (startingForm === 'Signup') {
              SwitchToLogin();
           } else {
                SwitchToSignup();
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
        
        <script src="js/script.js" type="text/javascript"></script>
        
    </body>
</html>

<!-- Hosting24 Analytics Code
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
