<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * @author MohameD
 */
class RoomOrder {
    public $orderID;
    public $roomID;
    public $guestID;
    public $orderName;
    
    public function __construct($orderId,$mealId,$guestId,$orderName) {
       $this->orderId=$orderId;
       $this->orderName=$orderName;
       $this->guestId=$guestId;
       $this->roomId=$mealId;
    }
    
    public function addOrder()
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $list = (array) $this;
        unset($list['orderID']);
        return $connection->insert("RoomOrder", $list);
    }
    public static function deleteOrder($id)
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        return $connection->Delete("RoomOrder","roomId",$id);
    }
    public function updateOrder($id)
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        return $connection->edit("RoomOrder", "orderId", $id, $this);
    }
    
}
