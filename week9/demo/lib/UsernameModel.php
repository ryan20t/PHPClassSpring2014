<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsernameModel
 *
 * @author ryan
 */
class UsernameModel {
    //put your code here
    private $username;
    
    
    function __construct($paramArr = array()) {        
        $this->map($paramArr);
    }
    
    public function map($paramArr) {
        if ( ! is_array($paramArr) ) {
            return false;
        }
        if ( array_key_exists('username', $paramArr) ) {
            $this->setUsername($paramArr['username']);
        }
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        if (is_string($username) && !empty($username) && strlen($username) > 3){
        $this->username = $username;
        }
    }


}
