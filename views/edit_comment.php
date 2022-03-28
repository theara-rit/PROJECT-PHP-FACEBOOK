<?php
require_once('../models/post.php');
require_once ("../templates/header.php");
?>
<div class="container col-6 ">
    <?php
        isset($_GET['id']) ? $id = $_GET['id'] :$id=null;
        $getComment=getcomment($id);
        $text = $getComment['description'];
    ?>

    <form action="../controllers/edit_comment.php" method="post" enctype="multipart/form-data" class="m-3">
        <div class="card">
            <div class="card-header">
                <div>
                    <input type="hidden" name="commentId" value="<?php echo $id ?>">
                </div>
                <div>
                    <input type="text"  name="description" class="form-control" value="<?php echo $text ?>">
                </div>
            </div>
            
            <div class="card-footer text-center bg-white">
                <button type="submit" class="btn btn-primary btn-block" name="upload" id="upload">Update</button>
            </div>
        </div> 
    </form>
</div>
<?php require_once "../templates/footer.php";?>