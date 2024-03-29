<?php
require '../dashboard/dashboard_header.php';
require '../database/db.php';
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Table</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Blog Category</th>
                                            <th style="width: 600px;">Blog Description</th>
                                            <th>User Name</th>
                                            <th>Posted At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM userpost INNER JOIN users
                                        ON userpost.id = users.id";
                                        $result = mysqli_query($db_connect, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($post = mysqli_fetch_assoc($result)) {
                                                $_SESSION['desp'] = $post['blogDescription'];
                                        ?>
                                                <tr>
                                                    <td><?= $post['blogID'] ?></td>
                                                    <td><?= $post['blogTitle'] ?></td>
                                                    <td><?= $post['blogCategory'] ?></td>
                                                    <td style="width: 600px;display: block;overflow: scroll; height: 100px">
                                                        <?= htmlspecialchars_decode($post['blogDescription']) ?>
                                                    </td>
                                                    <td><?= $post['name'] ?></td>
                                                    <td><?= $post['posted'] ?></td>
                                                    <td>
                                                        <span>
                                                            <a href="./update.php?blogTitle=<?= urlencode($post['blogTitle']) ?>&blogCategory=<?= urlencode($post['blogCategory']) ?>&id=<?= $post['blogID'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                <i class="fa fa-pencil color-success"></i>
                                                            </a>
                                                            <!-- <a href="./update.php?
                                                            blogTitle=<?=$post['blogTitle']?>&blogCategory=<?=$post['blogCategory']?>&
                                                            blogDescription=<?=$post['blogDescription']?>&id=<?=$post['blogID']?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil color-success"></i>
                                                            </a> -->
                                                            <a href="./delete.php?entity=userpost&entityAtr=blogID&redirect=post&id=<?=$post['blogID']?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reject">
                                                            <i class="fa fa-close color-danger"></i>
                                                            </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
require '../dashboard/dashboard_footer.php';
?>