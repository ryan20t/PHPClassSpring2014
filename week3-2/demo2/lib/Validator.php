<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validator
 *
 * @author ryan
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
    
    /*
    public static function emailIsValid($email) {
        if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            return true;
        } else { return false;}
    }
    */
    
    /**
    * A static method to check if a name is valid.
    *
    * @param string $name must be a valid name
    *
    * @return boolean
    */    
    public static function nameIsValid($name) {
        if ( is_string($name) && !empty($name) ) {
            return true;
        } else { return false; }//end if
    }
    
    /**
    * A static method to check if a password is valid.
    *
    * @param string $password must be a valid password
    *
    * @return boolean
    */    
    public static function passwordIsValid($password) {
        if ( is_string($password) && !empty($password) ) {
            return true;
        } else { return false; }//end if
    }
    
}