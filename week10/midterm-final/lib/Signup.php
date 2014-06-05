<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author GFORTI
 */
class Signup extends DB {
    //put your code here
    
    public function __construct() {
        $this->setDb();
    }
    
     public function save(SignupModel $dataModel) {
        $result = false;
         
        $email = $dataModel->getEmail();
        $website = $dataModel->getSitename();
        $password = sha1($dataModel->getPassword());
               
         if ( null !== $this->getDB() ) {
            $dbs = $this->getDB()->prepare('insert into users set website = :website, email = :email, password = :password'); 
           $dbs->bindParam(':website', $website, PDO::PARAM_STR); 
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
            
            $sitemodel = new SiteInformation();
            $siteinfo = $sitemodel->getInfo();
            
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                $result = intval($this->getDB()->lastInsertId());
                $siteCreated = $this->savePage($siteinfo, $result);
            } else {
                //$error = $dbs->errorInfo();
                //error_log("\n".$error[2], 3, "logs/errors.log");
            }
        
         }   
        

        if ($siteCreated){
            $_SESSION['id'] = $result;
        return $result;
        }
    }
    
    
    private function savePage(array $info, $id){
        
       
        
        $dbx = $this->getDB()->prepare('insert into about_page set user_id = :user_id, title = :title, theme = :theme, address = :address, phone = :phone, email = :email, content = :content, active = :active');
            $dbx->bindParam(':user_id', $id, PDO::PARAM_INT);
            $dbx->bindParam(':title', $info['title'], PDO::PARAM_STR);
            $dbx->bindParam(':theme', $info['theme'], PDO::PARAM_STR);
            $dbx->bindParam(':address', $info['address'], PDO::PARAM_STR);
            $dbx->bindParam(':phone', $info['phone'], PDO::PARAM_STR);
            $dbx->bindParam(':email', $info['email'], PDO::PARAM_STR);
            $dbx->bindParam(':content', $info['content'], PDO::PARAM_STR);
            $dbx->bindParam(':active', $info['active'], PDO::PARAM_INT);
         
            if ( $dbx->execute() && $dbx->rowCount() > 0 ){
                return true;
                
            }
            else {return false;}
        
        
        
    }

   
}
