<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author ryan
 */
class Signup {
    //put your code here
    
    /*
     * Todo - Store the POST values into a variable
     * Todo - Repopulate form with all but password
     * Todo - Validation for all input fields
     * Todo - Show success or error message
     */
    
    private $email;
    private $username;
    private $password;
    private $confirmPassword;
    
    private $errors = array();
    
    function __construct() {
        $this->email = filter_input(INPUT_POST, 'email');
        $this->username = filter_input(INPUT_POST, 'username');
        //add password and confirmPassword
    }

    
    ////////////////////////////////////////////
    public function getEmail() {
        return $this->email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getConfirmPassword() {
        return $this->confirmPassword;
    }

    ////////////////////////////////////////////////
    
    /**
     * A method to return all errors found in the post
     * 
     * @return array
     */
    
    public function getErrors() {
        return $this->errors;
    }
    
    
    /**
     * A method to check if a posted email is valid.
     * Adds a custom message to the errors list key["email"]
     * 
     * @return boolean
     */
    
    public function emailEntryIsValid() {
        $email = $this->getEmail();
        if ( empty($email) ) {
            $this->errors["email"] = "Email is missing.";
        } else if ( !Validator::emailIsValid($this->getEmail()) ) {
            $this->errors["email"] = "Email is not valid.";
        }
        
        return ( empty($this->errors["email"]) ? true : false );
    }
    

    
    
    /**
    * A static method to check if a Post request has been made.
    *    
    * @return boolean
    */    
    public function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
    
    
    /**
    * A method to check if a posted email is valid.
    * Adds a custom message to the errors list key["email"]
    *
    * @return boolean
    */ 
    public function entryIsValid(){
        $this->emailEntryIsValid();
        $this->usernameEntryIsValid();
        $this->passwordEntryIsValid();
        return ( count($this->errors) ? false : true );
    }
    
}