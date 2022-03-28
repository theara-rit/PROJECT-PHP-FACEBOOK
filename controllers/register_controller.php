<?php 
session_start(); 
require_once('../models/database.php');
require_once('../models/user.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($gender) && !empty($email) && !empty($password)){
        register($username,$gender,$email,$password);
        header('location: ../views/login.php');
    }else{
        header('location: ../views/register.php');
        die();
    }
}
?>