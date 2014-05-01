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
    public static function usernameIsValid($name) {
        return ( is_string($name) && !empty($name) );       
    }
}
