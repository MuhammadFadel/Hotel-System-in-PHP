<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Meal
 *
 * @author MohameD
 */
class Meal {
    public $id;
    public $imageURL;
    public $consistOf;
    
    function __construct($id, $imageURL, $consistOf) {
        $this->id = $id;
        $this->imageURL = $imageURL;
        $this->consistOf = $consistOf;
    }
    
    public function addMeal()
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $list = (array) $this;
        unset($list['mealId']);
        return $connection->insert("Meal", $list);
    }
    public function deleteMeal($id)
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $list = (array) $this;
        unset($list['mealId']);
        return $connection->Delete("Meal", "id", $id);
    }
    public function updateMeal($id)
    {
        require_once './Artifex.php';
        /* @var $connection Artifex */
        $connection = Artifex::getInstance();
        $list = (array) $this;
        unset($list['mealId']);
        return $connection->edit("Meal", "id", $id, $this);
    }

}
