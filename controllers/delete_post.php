<?php
require_once "../models/post.php";
$id = null;
isset($_GET['id']) ? $id = $_GET['id'] : $id = null;
if($id !== null)
{
    deletePost($id);
    header("Location: ../views/post_view.php");
}
