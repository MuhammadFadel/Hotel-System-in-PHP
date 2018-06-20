<?php

class UserType {
    public $email;
    public $type;
    public function __construct($email, $type) {
        $this->email = $email;
        $this->type = $type;
    }
    public function add() {
        require_once './Artifex.php';
        $connection = Artifex::getInstance();
        return $connection->insert("usertype", (array) $this);
    }
    public function edit() {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        return $connection->edit("usertype", "email", $this->email, (array) $this);
    }
    public function delete() {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        return $connection->Delete("usertype", "email", $this->email);
    }
}
