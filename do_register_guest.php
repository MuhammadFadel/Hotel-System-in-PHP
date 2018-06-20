<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST["email"])) {
    session_start();
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $password = filter_input(INPUT_POST, 'password');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $gender = filter_input(INPUT_POST, 'gender');
    include_once './Guest.php';
    $guest = new Guest('', '', $fname, $password, $phone, $lname, '0', $email, '1', '', '');
    $result = $guest->register();
    if ($result) {
        $_SESSION['email'] = $email;
        $_SESSION['fullName'] = $fname . ' ' . $lname;
        $_SESSION['userType'] = 3;
        $_SESSION['user'] = (array) $guest;
    }else {
        $_SESSION['Error'] = $result;
    }
    /* @var $connection Artifex */
    $connection = Artifex::getInstance();
    $connection->getLastError();
    header("Location: index.php");
}