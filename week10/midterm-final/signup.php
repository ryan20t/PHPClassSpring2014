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
              
          if ( Util::isPostRequest() ) {
            $id = $signup->save($dataModel);
          }
        
        ?>
        
        <h1 id="logo"><span>&#x2728;</span>SaaS Project</h1>
        
        <fieldset>
            <legend>Signup</legend>
        <p> Already a member, <a href="login.php">Login</a></p>
        <form name="mainform" action="admin.php" method="post">
            
             
                         <label>Web Site:</label> <input type="text" name="website" maxlength="30" value="<?php echo $dataModel->getSitename(); ?>"/> <br />
             
            
                          <label>Email:</label> <input type="text" name="email" value = "<?php echo $dataModel->getEmail(); ?>"/> <br />
            
                          <label>Password:</label> <input type="password" name="password" /> <br />
               
            <input type="submit" value="Submit" />
                        
        </form>
        </fieldset>
    </body>
</html>

<!-- Hosting24 Analytics Code
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
