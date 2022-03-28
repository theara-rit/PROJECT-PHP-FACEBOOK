<?php
require_once 'database.php';


function createPost($img,$description,$userId)
{
    global $database;
    $statements = $database->prepare("INSERT INTO posts( img,description,userId) VALUES(:img,:description,:userId)");
    $statements->execute([
        ':img' => $img,
        ':description' => $description,
        ':userId' => $userId,
    ]);
    return $statements->rowCount()>0;
}


function updatePost($img,$id,$text)
{
    global $database;
    $statment=$database->prepare("UPDATE  posts SET description= :text,img= :img WHERE postId=:id");
    $statment->execute([
        ':img' => $img,
        ':id' => $id,
        ':text' => $text,
  
    ]);
}
function deletePost($id)
{
    global $database;
    $statment=$database->prepare("DELETE FROM posts WHERE postId=:id");
    $statment->execute([
        ':id' => $id,
    ]);
}

function getAllPost()
{
    global $database;
    $statment = $database->prepare("SELECT* FROM posts ORDER BY postId DESC");
    $statment->execute();
    return $statment->fetchAll();
}
function getPost($id)
{
    global $database;
    $statment = $database->prepare("SELECT* FROM posts WHERE postId=:postId");
    $statment->execute([
        ':postId' => $id,
    ]);
    return $statment->fetch();
}

// ______________________________Comment Post_________________________
function commentPost($description, $postId, $userId){
    global $database;
    $statements = $database->prepare("INSERT INTO comments(description, postId, userId) VALUES(:description, :postId, :userId)");
    $statements->execute([
        ':description' => $description,
        ':postId' => $postId,
        ':userId' => $userId,
        
    ]);
    return $statements->rowCount()>0;
}

function getcomment($comment){
    global $database;
    $statements = $database->prepare("SELECT* FROM comments where commentId=:commentId");
    $statements->execute([
        ':commentId'=>$comment,
    ]);
    return $statements->fetch();
}

function getcommentFromPost($postId){
    global $database;
    $statements = $database->prepare("SELECT * FROM comments WHERE postId=:postId");
    $statements->execute([
        ':postId' => $postId,
    ]);
    return $statements->fetchAll();
}


// ___________________________________Edit comments__________________________
function editComment($id, $description){
    global $database;
    $statements = $database->prepare("UPDATE comments SET description= :description WHERE commentId=:id");
    $statements->execute([
        ':id' => $id,
        ':description' => $description,       
    ]);

}

// ____________________________________Delete comments_______________________
function deleteComment($id){
    global $database;
    $statements = $database->prepare("DELETE FROM comments WHERE commentId=:id");
    $statements->execute([
        ':id' => $id,
    ]);
    
}

// ____________________________________Like post_____________________________

function likePost($like_numbers, $postId){
    global $database;
    $statements= $database->prepare("INSERT INTO likes(like_numbers, postId) VALUES (:like_numbers, :postId)");
    $statements->execute([
        ':like_numbers' => $like_numbers,
        ':postId' => $postId
    ]);
    return $statements->rowCount()==1;
}
function getNumberlike($postId){
    global $database;
    $statements = $database->prepare("SELECT COUNT(like_numbers) as likeNumber FROM likes WHERE postId = :postId");
    $statements->execute([
        ':postId' => $postId
    ]);
    $item = $statements->fetch();
    return $item;
}

// ______________________________Login Post________________________________________
function userLogin($email, $password){
    global $database;
    $statements = $database->prepare("SELECT * FROM users WHERE email=:email and password=:password");
    $statements->execute([
        ':email' => $email,
        ':password' => $password
    ]);
    $userLog = $statements->fetch();
    return $userLog;
}

// ____________________________________Get User Id_____________________________________

function getUserById($userId) {
    global $database;
    $statements = $database->prepare("SELECT * FROM users WHERE userId=:userId");
    $statements->execute([
        ':userId' => $userId
    ]);
    $user = $statements->fetch();
    return $user;
}


