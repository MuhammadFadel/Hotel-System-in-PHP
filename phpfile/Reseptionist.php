<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open t   he template in the editor.
 */

/**
 * Description of Reseptionist
 *
 * @author Mohamed
 */
include './User.php';
class Reseptionist Extends User
{
public $salary;
public $netsalary;
        public function __construct($id, $ssn, $fname, $lname, $isblocked, $email, $isActive, $imageURL,$salary,$netsalary) {
       $this->id = $id;
       $this->ssn = $ssn;
       $this->fname = $fname;
       $this->lname = $lname;
       $this->isblocked = $isblocked;
       $this->email = $email;
       $this->isActive = $isActive;
       $this->imageURL = $imageURL;
       $this->netsalary=$netsalary;
       $this->salary=$salary;
       
        }

}
