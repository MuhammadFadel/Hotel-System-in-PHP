<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MealOrder
 *
 * @author MohameD
 */
class MealOrder {

    
    public $orderId;
    public $mealId;
    public $guestId;
    public $orderName;
    
    public function __construct($orderId,$mealId,$guestId,$orderName) {
       $this->orderId=$orderId;
       $this->orderName=$orderName;
       $this->guestId=$guestId;
       $this->mealId=$mealId;
    }
    
    public static function addOrder()
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $list = (array) $this;
        unset($list['orderID']);
        return $connection->insert("MealOrder", $list);
    }
    public static function deleteOrder($id)
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        return $connection->Delete("MealOrder","mealId",$id);
    }
    public static function updateOrder($id)
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        return $connection->edit("MealOrder", "orderId", $id, $this);
    }
    
}
