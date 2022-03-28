<?php require_once "../templates/header.php"; ?>
<?php

isset($_GET['id']) ? $id = $_GET['id'] : $id = null;
?>
<form action="../controllers/comment_post.php" method="post" enctype="multipart/form-data" >
    <div class="card col-3">
        <div class="card-header">
            <input type="text" name="description" placeholder='write comment.........' class="w-100 rounded-left rounded-right rounded-top rounded-buttom" style="outline:none">            <button class="btn btn-primary">send</button>
        </div>
        
        <input type="hidden" name="userId" value="1">
        <input type="hidden" name="postId" value="<?php echo $id;?>">
    </div>
</form>
<?php require_once "../templates/footer.php"; ?>