<?php
include '../dashboard/dashboard_header.php';

?>


<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid mt-3">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Vertical Form</h4>
                            <div class="basic-form">
                                <form action="post.php" method="POST" enctype="multipart/form-data"> 
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label>Category</label>
                                            <input type="text" class="form-control" placeholder="Category" name="blogCategory">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Title" name="blogTitle">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="blogImage">
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Blog Description</label>
                                        <input type="text" class="form-control" id="summernote" name="blogdescription">
                                    </div>
                                    <button type="submit" class="btn btn-dark">Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->


<?php
include '../dashboard/dashboard_footer.php';
?>