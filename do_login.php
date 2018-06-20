<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if(isset($_POST["email"])){
    session_start();
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    require_once './User.php';
    $type = User::login($email, $password);
    if($type == 3) {
        // we have a guest
        require_once './Guest.php';
        $guest = Guest::login($email, $password);
        if($guest != FALSE) {
            $_SESSION['email'] = $guest['email'];
            $_SESSION['fullName'] = $guest['fname'] . ' ' . $guest['lname'];
            $_SESSION['userType'] = 3;
            $_SESSION['user'] = $guest;
        }
        else {
            $_SESSION['Error'] = "Error";
        }
    }
    else {
        $_SESSION['Error'] = "Error";
    }
    header("Location: index.php");
}