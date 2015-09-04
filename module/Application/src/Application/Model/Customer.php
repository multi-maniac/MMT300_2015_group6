<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author Pepukayi
 */
namespace Application\Model;


 class Customer 
 {
     public $name;
     public $email;
     public $subject;
     public $body;
     

     public function exchangeArray($data)
     {
         $this->name     = (!empty($data['name'])) ? $data['name'] : null;
         $this->email     = (!empty($data['email'])) ? $data['email'] : null;
         $this->subject = (!empty($data['subject'])) ? $data['subject'] : null;
         $this->body  = (!empty($data['body'])) ? $data['body'] : null;
       
     }
     
 }
