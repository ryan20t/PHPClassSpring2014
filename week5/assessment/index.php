<?php include 'dependency.php'; ?>
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
        <link href="style.css" media="all" type="text/css" rel="stylesheet"></link>
    </head>
    <body>
        <?php
        // put your code here
        $state_list = array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
        
        
        $dataProcessor = new DataProcessor();
        $errors = array();
        
        if ( Util::isPostRequest() ){
            if ( !$dataProcessor->entryIsValid() ) {
                $errors = $dataProcessor->getErrors();
            }
        }
        
        if ( count($errors) ) {
                echo '<ul class="error">';
                foreach ($errors as $value) {
                    echo '<li>',$value,'</li>';
                }
                echo '</ul>';
            }
        
        
        ?>
        
        <form name="mainform" id="mainform" action="#" method="post">
            <legend>Survey Form:</legend>
            <label for="fullname">Full Name:</label>
            <input id="fullname" type="text" name="fullname" value="<?php echo $dataProcessor->getFullname(); ?>" /> <br />
            
            <label for="state">State:</label>
            <?php 
            echo '<select id="state" name="state">';
            foreach ($state_list as $state)
            {
                echo '<option value="',$state,'">', $state, '</option>';
            }
            echo '</select><br />';
            ?>
            
            <label for="comments">Comments:</label>
            <input id="comments" type="text" name="comments" value="<?php echo $dataProcessor->getComments(); ?>" /> <br />
            
            <input type="submit" value="Submit" />
        </form>
        
        <?php
        date_default_timezone_set('America/New_York');
        if ( Util::isPostRequest() ){
            if ( $dataProcessor->entryIsValid() ) {
                //hide form
                echo '<style>','#mainform {display: none;}','</style>';
                
                //display information
                $date = date('M d, o');
                
                echo '<table id="output" name="output" border="1" padding="1">',
                    '<tr><td>',"Name",'</td><td>',$dataProcessor->getFullname(),'</td></tr>',
                    '<tr><td>',"State",'</td><td>',$dataProcessor->getState(),'</td></tr>',
                    '<tr><td>',"Comments",'</td><td>',$dataProcessor->getComments(),'</td></tr>',
                    '<tr><td>',"Post Date",'</td><td>',$date,'</td></tr>';
                
            }
        }
        
        
        ?>
        
    </body>
</html>