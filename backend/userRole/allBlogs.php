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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Table</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Blog Title</th>
                                            <th>Blog Category</th>
                                            <th>Blog Description</th>
                                            <th>Post time</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            //FIXME have to fetch according to user id
                                            $email = $_SESSION['email'];
                                            $userSql = "SELECT * FROM users WHERE email = '$email'";
                                            $userResult = mysqli_query($db_connect, $userSql);
                                            $user = mysqli_fetch_assoc($userResult);
                                            $id = $user['id'];
                                            $sql = "SELECT * FROM userpost INNER JOIN users ON userpost.id = '$id'";
                                            $result = mysqli_query($db_connect, $sql);
                                            print_r($result);
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($post = mysqli_fetch_assoc($result)) {
                                        ?>
                                                    <tr>
                                                        <td><?= $post['blogTitle'] ?></td>
                                                        <td><?= $post['blogCategory'] ?></td>
                                                        <td><?= $post['blogDescription'] ?></td>
                                                        <td><?= $post['posted'] ?></td>
                                                        <td><?= $post['name'] ?></td>
                                                        <td>
                                                            <span>
                                                                <a href="./delete.php?entity=users&entityAtr=id&redirect=allUsers&id=<?=$post['id']?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reject">
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
    include '../dashboard/dashboard_footer.php';
?>