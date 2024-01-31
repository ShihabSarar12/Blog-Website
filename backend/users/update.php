<?php

require '../dashboard/dashboard_header.php';
require '../database/db.php';
?>

<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php if (isset($_SESSION['complete'])) { ?>
                                    <div class="alert alert-success"><?= $_SESSION['complete']; ?></div>
                                <?php unset($_SESSION['complete']);}?>
                            </h4>
                            <div class="basic-form">
                                <form action="updatePost.php" method="POST" enctype="multipart/form-data"> 
                                <input type="hidden" name="blogID" value=<?=$_GET['id']?>>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>Category</label>
                                            <input type="text" class="form-control" placeholder="Category" name="blogCategory" value=<?= $_GET['blogCategory']?>>
                                            <!-- <input type="text" class="form-control" placeholder="Category" name="blogCategory"> -->
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Title" name="blogTitle" value=<?= $_GET['blogTitle']?>>
                                            <!-- <input type="text" class="form-control" placeholder="Title" name="blogTitle"> -->
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="blogImage">
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Blog Description</label>
                                        <!-- <input type="text" name="blogDescription" value=<?= $_GET['blogDescription']?>> -->
                                        <textarea id="summernote" name="blogDescription"><?= $_SESSION['desp'] ?></textarea>

                                    </div>
                                    <button type="submit" class="btn btn-dark">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require '../dashboard/dashboard_footer.php';
?>