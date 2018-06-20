<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Mohamed
 */
abstract class User 
{
   public $id;
   public $ssn;
   public $fname;
   public $password;
   public $phone;
   public $lname;
   public $isblocked;
   public $email;
   public $isActive;
   public $imageURL;
   public function __construct($id, $ssn, $fname, $password, $phone, $lname, $isblocked, $email, $isActive, $imageURL) {
       $this->id = $id;
       $this->ssn = $ssn;
       $this->fname = $fname;
       $this->password = $password;
       $this->phone = $phone;
       $this->lname = $lname;
       $this->isblocked = $isblocked;
       $this->email = $email;
       $this->isActive = $isActive;
       $this->imageURL = $imageURL;
   }

   public abstract function register();
   public static function login($email, $password) {
       require_once './Artifex.php';
       /* @var $connection Artifex */
       $connection = Artifex::getInstance();
       var_dump($connection->find_one("usertype", "email", $email)['type']);
       return $connection->find_one("usertype", "email", $email)['type'];
   }
   public abstract function logout();
   

}
