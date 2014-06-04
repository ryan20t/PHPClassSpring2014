<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout
 *
 * @author GFORTI
 */
class logout {
    //put your code here
    
    
    public static function checkLogout() {
        
        $logout = filter_input(INPUT_GET, 'logout');
        
        echo $logout;
        
        if ( $logout == 1 ) {
            $_SESSION['login'] = false;
            session_destroy();
        }
        
    }
    
    public static function confirmAccess() {
        if ( $_SESSION['login'] !== true ) {
             header("location: login.php");           
        }
    }
    
    
}
