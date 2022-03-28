<?php 
require_once ('../models/post.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['commentId'];
    $description = $_POST['description'];    
    if(!empty($description)){
        editComment($id,$description);
        header("Location:../views/post_view.php");
    }
}
?>