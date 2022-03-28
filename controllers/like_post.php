<?php
require_once ('../models/post.php');
?>
<?php 
    $like_numbers = 1;
    $postId = $_POST['postId'];
    likePost($like_numbers, $postId);
    header('location: ../views/post_view.php');
?>