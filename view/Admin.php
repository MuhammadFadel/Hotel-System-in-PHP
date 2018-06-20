<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Mohamed
 */
include './User.php';
class Admin Extends User{
    //put your code here
    public function __construct($id, $ssn, $fname, $lname, $isblocked, $email, $isActive, $imageURL) {
       $this->id = $id;
       $this->ssn = $ssn;
       $this->fname = $fname;
       $this->lname = $lname;
       $this->isblocked = $isblocked;
       $this->email = $email;
       $this->isActive = $isActive;
       $this->imageURL = $imageURL;
   }
}
