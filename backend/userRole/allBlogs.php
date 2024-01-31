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
                                            <th style="width: 600px;">Blog Description</th>
                                            <th>Post time</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $email = $_SESSION['email'];
                                        // Fix: Add single quotes around $email in the WHERE clause
                                        $id_query = "SELECT id FROM users WHERE email = '$email'";
                                        $id_result = mysqli_query($db_connect, $id_query);

                                        // Check if the query was successful and rows were returned
                                        if ($id_result && mysqli_num_rows($id_result) > 0) {
                                            $id_row = mysqli_fetch_assoc($id_result);
                                            $id = $id_row['id'];

                                            // Corrected: Join the tables using the corresponding columns
                                            $sql = "SELECT * FROM userpost INNER JOIN users ON userpost.id = users.id WHERE userpost.id = $id";
                                            $result = mysqli_query($db_connect, $sql);

                                            if ($result) {
                                                while ($post = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>
                                                <td><?= $post['blogTitle'] ?></td>
                                                <td><?= $post['blogCategory'] ?></td>
                                                <td style="width: 600px;display: block;overflow: scroll; height: 100px"><?= $post['blogDescription'] ?></td>
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