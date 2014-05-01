<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataProcessor
 *
 * @author ryan
 */
class DataProcessor {
    //put your code here
    protected $errors = array();
    
    public $fullname;
    public $state;
    public $comments;
    public $postdate;
    
    public function __construct() {
        $this->fullname = filter_input(INPUT_POST, 'fullname');
        $this->state = filter_input(INPUT_POST, 'state');
        $this->comments = filter_input(INPUT_POST, 'comments');
    }
    
    public function getFullname() {
        return $this->fullname;
    }
    
    public function getState() {
        return $this->state;
    }
    
    public function getComments() {
        return $this->comments;
    }
    
    
    public function entryIsValid(){
        $this->nameEntryIsValid();
        $this->commentsEntryIsValid();
        return ( count($this->errors) ? false : true );
    }
    
    public function nameEntryIsValid() {
        if ( empty($this->fullname) ) {
            $this->errors["fullname"] = "Full name is required.";
         }
         return ( empty($this->errors["fullname"]) ? true : false );
    }
    
    public function commentsEntryIsValid() {
        if ( empty($this->comments) ) {
            $this->errors["comments"] = "Comments are required.";
         }
         return ( empty($this->errors["comments"]) ? true : false );
    }
    
    
    public function getErrors() {
        return $this->errors;
    }
    
    
    
    
    
    
    
}
