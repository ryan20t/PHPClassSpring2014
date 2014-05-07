<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Passcode
 *
 * @author ryan
 */
class Passcode {
    //put your code here
    
    private $passcode;
    
    function __construct() {
        //$this->passcode = filter_input(INPUT_POST, 'passcode'); Use other. Always use getters and setters
        $this->setPasscode(filter_input(INPUT_POST, 'passcode'));
    }

    public function getPasscode() {
        return $this->passcode;
    }

    public function setPasscode($passcode) {
        $this->passcode = $passcode;
    }

    
    /**
     * 
     * @param type $code
     * @return boolean
     */
    public function isValidPasscode()
    {
        /*
        if ($this->passcode == $code)
        {
            return true;
        } 
        else 
        {
            return false;
        }
        */
        return ($this->getPasscode() === Config::PASS_CODE ? true : false);
        
    }
    
    
}
