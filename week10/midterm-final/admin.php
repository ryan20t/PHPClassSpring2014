<?php include 'dependency.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SaaS Project - Admin</title>
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
    </head>
    <body>
                 
        <h1 id="logo"><span>&#x2728;</span>SaaS Project</h1>
        
        <div id="corner"><a href="login.php?logout=1">Logout</a></div>
        
         <fieldset>
        
        <legend> Edit your Page</legend>
                
        
        <div id="preview"> <a href="index.php?page=truffle" target="popup">View Page</a></div>
        
         <form name="mainform" action="#" method="post">
            
             <label> Title:</label> <input type="text" name="title" value="title" /><br />            
             <label> Theme:</label> <select name="theme">
                <option value="theme1" selected="selected">Theme 1</option>
                <option value="theme2" >Theme 2</option>
                <option value="theme3" >Theme 3</option>
                 </select>
            <br />
            
            <label> Address:</label> <input type="text" name="address" value="address" /><br /> 
            <label> Phone:</label> <input type="text" name="phone" value="phone" /><br /> 
            <label> Email:</label> <input type="text" name="email" value="email" /><br /> 
            <label> About:</label><br />
            <textarea name="about" cols="50" rows="10">about</textarea><br /> 
            
            <input type="submit" value="Submit" />
            
        </form>
        
         </fieldset>
        
    </body>
</html>

<!-- Hosting24 Analytics Code
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
