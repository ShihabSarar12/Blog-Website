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
                            <h4 class="card-title">
                                <?php if (isset($_SESSION['complete'])) { ?>
                                    <div class="alert alert-success"><?= $_SESSION['complete']; ?></div>
                                <?php unset($_SESSION['complete']);}?>
                            </h4>
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
                                        <textarea id="summernote" name="blogdescription"> </textarea>
                                        <!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit laudantium saepe est! Voluptatum debitis beatae atque. Accusantium soluta numquam perferendis, nesciunt ullam temporibus cum? Ipsum voluptas eius reiciendis recusandae id, corporis qui unde atque laborum magnam totam, mollitia suscipit repellat ducimus voluptates ea fugiat sit. Magnam in laudantium ab beatae et nihil. Repudiandae ipsa distinctio, error at vel debitis quisquam illo itaque quis tenetur aliquid eligendi odio, nam recusandae. Neque provident sed est temporibus assumenda architecto sapiente possimus labore amet sit, aspernatur vero ab obcaecati laboriosam ipsa magni accusamus molestias laborum earum ullam, itaque sequi odit animi. Alias assumenda nobis, repellat odio velit quae, ipsam impedit aliquam facilis reprehenderit exercitationem vero fuga, consequatur labore explicabo maxime quo. Obcaecati, eaque quam dignissimos quis, eos repellat ad minima reiciendis reprehenderit quas fuga, temporibus harum! Nam ab eligendi ipsam magnam at, ut, harum repellendus cupiditate rem suscipit quod, molestiae natus unde sunt nihil impedit nostrum cum quis. Placeat cumque incidunt eum reiciendis facilis. Vitae perferendis quidem pariatur sunt. Culpa nulla, necessitatibus modi, quasi voluptate, expedita a aut quod veniam aliquid libero ducimus ab hic esse suscipit et dolores praesentium consequuntur explicabo quae qui dignissimos. Eaque, nam amet incidunt debitis fugiat illum exercitationem ullam. -->
                                        <!-- <input type="text" class="form-control" id="summernote" name="blogdescription"> -->
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