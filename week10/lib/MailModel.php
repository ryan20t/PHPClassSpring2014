<?php

/**
 * Description of MailModel
 *
 * @author GFORTI
 */
class MailModel {
    
    private $to,$from,$subject,$message,$headers;
    
    function __construct($paramArr = array()) {        
        $this->map($paramArr);
    }
    
    
     public function map($paramArr) {        
        if ( is_array($paramArr) && count($paramArr) ) {                   
            foreach ($paramArr as $key => $value) {
                $method = 'set'.ucfirst($key);
                if( method_exists($this, $method) ) {
                    $this->$method($value);
                }
            }
        }       
    }
    public function getTo() {
        return $this->to;
    }

    public function getFrom() {
        return $this->from;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getHeaders() {
        return $this->headers;
    }

    public function setTo($to) {
        $this->to = $to;
    }

    public function setFrom($from) {
        $this->from = $from;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setHeaders($headers) {
        $this->headers = $headers;
    }


    
}
