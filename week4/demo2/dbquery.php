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
        
        //print_r($_GET);
        
        $id = filter_input(INPUT_GET, 'id');
        
        $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
        
        $dbs = $db->prepare('select * from signup where id= :id limit 1');
        $dbs->bindParam(':id', $id, PDO::PARAM_INT);

        $dbs->execute();
        $results = $dbs->fetch(PDO::FETCH_ASSOC);

        //print_r($results);
        
        echo '<table border="1">';
        
            echo '<tr>';
            echo '<td>', $results['id'] ,'</td>';
            echo '<td>', $results['email'] ,'</td>';
            echo '<td>', $results['username'] ,'</td>';
            echo '<td>', $results['password'] ,'</td>';
            echo '</tr>';
        
        echo '</table>';

        /*
         $statement = $db->prepare('select * from login where username = :user and password = :password limit 1');
            $statement->bindParam(':user', $email, PDO::PARAM_STR);
            $statement->bindParam(':password', $password, PDO::PARAM_STR);
            $statement->execute(); */

        
        ?>
    </body>
</html>
