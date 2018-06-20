<?php

if(isset($_POST["fname"])){
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $location = filter_input(INPUT_POST, 'nationality');
    $password = filter_input(INPUT_POST, 'password');
    $phone = filter_input(INPUT_POST, 'phone');
    $ssn = filter_input(INPUT_POST, 'ssn');
    session_start();
    if(isset($_SESSION['user']['email']) && $_SESSION['userType'] == 3) {
        require_once './Guest.php';
        $guest = new Guest('', $ssn, $fname, $password, $phone, $lname, '0', $_SESSION['user']['email'], '1', '', $location);
        if($password == "") {
            $guest->update(FALSE);
        }
        else {
            $guest->update(TRUE);
        }
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['fullName'] = $fname . ' ' . $lname;
        header("Location: profile.php");
    }
}