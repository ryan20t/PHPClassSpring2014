<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author ryan
 */
class Login extends DB {
    //put your code here
    function __construct() {
        $this->setDb();
    }

    public function sitenameTaken( SignupModel $sitenameModel ){
        
        $website = $sitenameModel->getSitename();
        $isTaken = false;
        
        if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select website from users where website = :website limit 1');
            $dbs->bindParam(':website', $website, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $isTaken = true;
            }
            
        }
        return $isTaken;
        
    }
    
    public function emailTaken( SignupModel $emailModel ){
        
        $email = $emailModel->getEmail();
        $isTaken = false;
        
        if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('select email from users where email = :email limit 1');
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $isTaken = true;
            }
            
        }
        return $isTaken;
        
    }
    
    
    public function loginInfoIsCorrect(SignupModel $model){
        $email = $model->getEmail();
        $isCorrect = false;
        
        if ( null !== $this->getDB() ){
            $dbs = $this->getDB()->prepare('select user_id, password from users where email = :email limit 1');
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0){
                
                $results = $dbs->fetch(PDO::FETCH_ASSOC);
            }
            $checkpw = sha1($model->getPassword());
            if ($results['password'] == $checkpw){
                $isCorrect = true;
                $_SESSION['id'] = $results['user_id'];
            }
            
        }
        return $isCorrect;
    }
    
    
    public function getSiteName()
    {
        $email = filter_input(INPUT_POST, 'email');
        
        if ( null !== $this->getDB() ){
            $dbs = $this->getDB()->prepare('select website from users where email = :email limit 1');
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        }
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ){
            $results = $dbs->fetch(PDO::FETCH_ASSOC);
        }
        
        $sitename = $results['website'];
        return $sitename;
        
    }
    
}
