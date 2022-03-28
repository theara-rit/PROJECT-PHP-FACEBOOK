<?php
require_once ('../models/post.php');
?>
<?php
    $description = $_POST['description'];
    $userId = $_POST['userId'];
    $postId = $_POST['postId'];

    if (!empty($description) and !empty($userId) and !empty($postId)){
        commentPost($description, $postId, $userId); 
    } 
    header('location: ../views/post_view.php');
?>