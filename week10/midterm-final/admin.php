<?php include 'dependency.php'; ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SaaS Project - Admin</title>
        <link rel="stylesheet" type="text/css" href="css/admin.css" />
    </head>
    <body>
               
        <?php
        Util::checkLogout();
        Util::confirmAccess();
        
        $siteInfoModel = new GetUpdateSite();
        $siteInfo = $siteInfoModel->getSiteInfo();
        
        if ( Util::isPostRequest() ) {
            
           $updatedInfo = filter_input_array(INPUT_POST);
           $siteInfo['title'] = $updatedInfo['title'];  
           $siteInfo['theme'] = $updatedInfo['theme'];  
           $siteInfo['address'] = $updatedInfo['address'];  
           $siteInfo['phone'] = $updatedInfo['phone'];  
           $siteInfo['email'] = $updatedInfo['email'];              
           $siteInfo['content'] = $updatedInfo['about']; 
           
           $updated = $siteInfoModel->updateSite($siteInfo);
           if ($updated){
               $message = "Site updated successfully.";
           }
           else
           {
               $message = "Update failed";
           }

        }
        
        $siteName = $siteInfoModel->getWebsite();
        
        ?>
        
        
        //<?php if ($siteInfo['theme'] === "theme1"){echo 'selected="selected"';} ?>
        
        
        <h1 id="logo"><span>&#x2728;</span>SaaS Project</h1>
        
        <div id="corner"><a href="?logout=1">Logout</a></div>
        
         <fieldset>
        
        <legend> Edit your Page</legend>
                
        
        <div id="preview"> <a href="<?php echo 'index.php?page='.$siteName ?>" target="popup">View Page</a></div>
        
        <span id="updateMessage"><?php echo $message; ?></span>
        
         <form name="mainform" action="#" method="post">
            
             <label> Title:</label> <input type="text" name="title" value="<?php echo $siteInfo['title']; ?>" /><br />            
             <label> Theme:</label> <select name="theme">
                <option value="theme1" <?php if ($siteInfo['theme'] === "theme1"){echo 'selected="selected"';} ?>>Theme 1</option>
                <option value="theme2" <?php if ($siteInfo['theme'] === "theme2"){echo 'selected="selected"';} ?>>Theme 2</option>
                <option value="theme3" <?php if ($siteInfo['theme'] === "theme3"){echo 'selected="selected"';} ?>>Theme 3</option>
                 </select>
            <br />
            
            <label> Address:</label> <input type="text" name="address" value="<?php echo $siteInfo['address']; ?>" /><br /> 
            <label> Phone:</label> <input type="text" name="phone" value="<?php echo $siteInfo['phone']; ?>" /><br /> 
            <label> Email:</label> <input type="text" name="email" value="<?php echo $siteInfo['email']; ?>" /><br /> 
            <label> About:</label><br />
            <textarea name="about" cols="50" rows="10"><?php echo $siteInfo['content']; ?></textarea><br /> 
            
            <input type="submit" value="Submit" />
            
        </form>
        
        </fieldset>
        
    </body>
</html>

<!-- Hosting24 Analytics Code
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
