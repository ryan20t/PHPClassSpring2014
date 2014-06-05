<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo Page</title>
        <?php
        
        
        
        if (isset($_SESSION['id'])){
            $siteInfoModel = new GetUpdateSite();
            $siteInfo = $siteInfoModel->getSiteInfo();
            
            $loggedin = true; 
        }
        
        if ($loggedin){
            $theme = $siteInfo['theme'];
        }
        else{
            $theme = "theme2";
        }
        
        
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo 'css/'.$theme.'.css' ?>" />
    </head>
    <body>
        
        
        <?php
        
        /*
        
        if (isset($_SESSION['id'])){
            $siteInfoModel = new GetUpdateSite();
            $siteInfo = $siteInfoModel->getSiteInfo();
            
            $loggedin = true; 
        }
        
        if (loggedin){
            $theme = $siteInfo['theme'];
        }
        else{
            $theme = "theme2";
        }
        
        */
        ?>
        
        

        
        <!-- http://www.fileformat.info/info/unicode/char/270d/index.htm -->
        <div id="icon">&#x270d;</div>
        
        <h1><span>What we are all</span>
            About</h1>
        
        <!-- http://html-ipsum.com/ -->
        <div id='about'>  
            <h2><?php if ($loggedin){echo $siteInfo['title'];} else {echo "Welcome to our website";} ?></h2> 
<p><a href="admin.php">Edit</a></p>
 <?php if ($loggedin){echo $siteInfo['content'];} else {echo
            "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus<br />
<br />
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus<br />
<br />
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus<br />
<br />
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus<br />
<br />
 Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus  ";}
?></div>
        
        <div id="contact">
           
            <div id="email"> 
                 <div class="iconHeader">&#x2709;</div>
                <?php if ($loggedin){echo $siteInfo['email'];} else {echo "demo@demo.com";} ?>            </div>
            <div id="phone"> 
                 <div class="iconHeader">&#x2706;</div>
                <?php if ($loggedin){echo $siteInfo['phone'];} else {echo "(401) 555-7777";} ?>
            </div>
             <div id="address">
                <div class="iconHeader">&#x270e;</div>
                <?php if ($loggedin){echo $siteInfo['address'];} else {echo "123 demo st, Demo DM, 02990";} ?>            </div>
        </div>
        

    </body>
</html>

<!-- Hosting24 Analytics Code
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
