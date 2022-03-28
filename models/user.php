<?php 
require_once('database.php');

function register($username,$gender,$email,$password)
{
    global $database;
    $statements = $database->prepare("INSERT INTO users( Name,Email,password,gender) VALUES(:name,:email,:password,:gender)");
    $statements->execute([
        ':name' => $username,
        ':email' => $email,
        ':password' => $password,
        ':gender' => $gender
    ]);
    return $statements->rowCount()>0;
}

// 

function getUser($username,$password)
{
    global $database;
    $statement = $database->prepare("SELECT * FROM users WHERE Name=:username and password=:password");
    $statement->execute([
        ':username'=>$username,
        ':password'=>$password
    ]);
    return $statement->fetch();
}









?>