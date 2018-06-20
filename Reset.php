<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author MohameD
 */
class Reset {
   public $email;
   public $code;
   
   public function addReset()
   {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $list = (array) $this;
        //unset($list['orderID']);
        return $connection->insert("Reset", $list);
   }
   public static function deleteReset($email)
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        return $connection->Delete("Reset","email",$email);
    }
}
