<?php session_start(); 
require_once('../models/user.php');
$_SESSION['username']= $_POST['username'];
$_SESSION['password']= $_POST['password'];

$user = getUser($_SESSION['username'], $_SESSION['password']);
print_r($user['userName']);
if (!empty($_SESSION['username']) && !empty($_SESSION['password'])){
    if ($_SESSION['username'] == $user['Name'] && $_SESSION['password'] == $user['password']){
        header('location: ../views/post_view.php');
    }
    else{
        header('location: login_view.php');
        die();
    }
}

?>

