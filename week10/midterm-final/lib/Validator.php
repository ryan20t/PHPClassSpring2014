<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validator
 *
 * @author GFORTI
 */
class Validator {
    //put your code here
  
    
  
        
   /**
  * A static method to check if an email is valid.
  *
  * @param string $email must be a valid email
  *
  * @return boolean
  */    
    public static function emailIsValid($email) {
        
        return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) != false );
    }
    
    
     /**
    * A static method to check if a name is valid.
    *
    * @param string $website must be a valid, untaken name
    *
    * @return boolean
    */    
    public static function websiteIsValid($website) {
        return ( is_string($website) && !empty($website) );       
    }
    
    /**
    * A static method to check if comments are valid.
    *
    * @param string $password must be a valid Length
    *
    * @return boolean
    */    
    public static function passwordIsValid($password) {
        return ( is_string($password) && !empty($password) && strlen($password) > 5 );    
       
    }
}
