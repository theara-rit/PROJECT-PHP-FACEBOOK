<?php
require_once('../models/post.php');
require_once ("../templates/header.php");
?>
<div class="container col-6 ">
    <?php
        isset($_GET['id']) ? $id = $_GET['id'] :$id=null;
        $getPost=getPost($id);
        $text = $getPost['description'];
    ?>
    <form action="../controllers/edit_post.php" method="post" enctype="multipart/form-data" class="m-3">
        <div class="card">
            <div class="card-header">
                <div>
                    <input type="hidden" name="postId" value="<?php echo $id ?>">
                </div>
                <div>
                    <input type="text"  name="description" class="form-control" value="<?php echo $text ?>">
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <input type="file" name="img" >
                    <input type="hidden"  name="oldfile" value="<?php echo $getPost['img'] ?>">
                </div>
            </div>
            <div class="card-footer text-center bg-white">
                <button type="submit" class="btn btn-primary btn-block" name="upload" id="upload">Update</button>
            </div>
        </div> 
    </form>
</div>
<?php require_once "../templates/footer.php";?>