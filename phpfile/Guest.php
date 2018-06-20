<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guest
 *
 * @author Mohamed
 */
include_once './User.php';

class Guest extends User {

    public $nationality;

    public function __construct($id, $ssn, $fname, $password, $phone, $lname, $isblocked, $email, $isActive, $imageURL, $nationality) {
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
        $this->nationality = $nationality;
    }

    public function register() {
        require_once './Artifex.php';
        require_once './UserType.php';
        /* @var $connection Artifex */
        $this->password = sha1($this->password);
        $connection = Artifex::getInstance();
        $list = (array) $this;
        unset($list['id']);
        if ($connection->insert("guest", $list)) {
            $ut = new UserType($this->email, 3);
            echo $ut->add();
            return TRUE;
        }
        return $connection->getLastError();
    }

    public static function login($email, $password) {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $guest = $connection->find("guest", "email", $email);
        if ($guest = $guest->fetch_assoc()) {
            echo '<br/>';
            var_dump( $guest['password']);
            echo '<br/>';
            var_dump(sha1($password));
            echo '<br/>';
            if ($guest['password'] == sha1($password)) {
                return $guest;
            } else {
                echo "invalid password";
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    public function update($update_password) {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $this->password = sha1($this->password);
        $connection = Artifex::getInstance();
        $list = (array) $this;
        if(!$update_password) {
            unset($list['password']);
        }
        unset($list['id']);
        $connection->edit("guest", "email", $this->email, $list);
        //return $connection->getLastError();
    }
    public function logout() {
        
    }

}
