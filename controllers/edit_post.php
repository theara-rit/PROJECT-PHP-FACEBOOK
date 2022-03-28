<?php
require_once ('../models/post.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['postId'];
    $text = $_POST['description'];    
    $fileName=$_POST['oldfile'];
    if (!empty($_FILES['img']['name'])){
        $fileName=$_FILES['img']['name'];
    }
    $folder='../images/'.$fileName;
    move_uploaded_file($_FILES["img"]["tmp_name"], $folder);
    if(!empty($text)){
        updatePost($fileName,$id,$text);
        header("Location:../views/post_view.php");
    }
}
?>