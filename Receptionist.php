<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Receptionist
 *
 * @author Muhammad M. Fadel
 */
class Receptionist extends User{
    //put your code here
    private $Salary;
    private $netSalary;
    
    public function __construct($fName, $lName, $Email, $Password, $phoneNumber,
            $ssn, $idCardNumber, $BoD, $Nationality, $Salary, $netSalary) {
        parent::__construct($fName, $lName, $Email, $Password, $phoneNumber,
                $ssn, $idCardNumber, $BoD, $Nationality);
        $this->Salary = $Salary;
        $this->netSalary = $netSalary;
    }
    
    public function addGuest(){
        
    }
    public function deleteGuest(){
        
    }
    public function Order(){
        
    }
    public function editOrder(){
        
    }
    public function deleteOrder(){
        
    }
}
