<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Config::PAGE_TITLE; ?></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
        
        
        $dbs = $db->prepare('select * from signup');
        $dbs->execute();
        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
        
        echo '<table border="1">';
        
        foreach ($results as $value) {
            echo '<tr>';
            echo '<td>', $value['id'] ,'</td>';
            echo '<td>', $value['email'] ,'</td>';
            echo '<td>', $value['username'] ,'</td>';
            echo '<td>', $value['password'] ,'</td>';
            echo '</tr>';
        }
        
        echo '</table>';
        
        //print_r($results);
        
        ?>
    </body>
</html>
