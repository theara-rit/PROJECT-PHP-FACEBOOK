<div class="container bg-light">
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Post</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">          
          <form action="../controllers/create_post.php" method = "post" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="description" name="description">
            </div>
            <div class="form-group ">
              <input  type="file" class="form-control" placeholder="photos" name="img">
            </div>
            <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-primary " name="upload">POST</button>
            </div>
          </form>
        </div>  
      </div>
</div>
</div>
</div>
