<?php
include_once 'User.php';
include_once 'UserMapper.php';
include_once 'Admin.php';
require_once 'loginVerify.php';

session_start();
//main
if (isset($_POST['login-btn'])) {
    $username = $_POST['username'];
    $passwordi = $_POST['password'];
    $login = new LoginLogic($username, $passwordi);
    $login->verifyData();
} else if (isset($_POST['register-btn'])) {
    $emri = $_POST['register-emri'];
    $mbiemri = $_POST['register-mbiemri'];
    $username = $_POST['register-username'];
    $passwordi = $_POST['register-passwordi'];

    $register = new RegisterLogic($emri, $mbiemri, $username, $passwordi);
    $register->insertData();

} else {
    header("Location:../home.php");
}