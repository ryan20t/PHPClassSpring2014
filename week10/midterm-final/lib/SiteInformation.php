<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SiteInformation
 *
 * @author ryan
 */
class SiteInformation  {
    //put your code here
    
        
        
        private $info = array(
            "title" => "My Title",
            "theme" => "Theme 1",
            "address" => "123 Fake Street",
            "phone" => "5555555555",
            "email" => "My Contact Email",
            "content" => "My Content Here",
            "active" => 1           
        );
    
        public function getInfo() {
            return $this->info;
        }

            function __construct() {
        
    }


}
