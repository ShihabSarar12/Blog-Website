<?php
session_start();
require '../database/db.php';
require '../dashboard/dashboard_header.php';
?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="card gradient-1">
                    <div class="card-body">
                        <form action="addCategories.php" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">Add Blog Category</label>
                                <input type="text" class="form-control" placeholder="Category Name" aria-describedby="categoryName" name="categoryName">
                                <?php if(isset($_SESSION['error'])){ ?>
                                    <div class="alert alert-danger mt-2" role="alert">
                                        <?= $_SESSION['error'] ?>
                                    </div>
                                <?php } unset($_SESSION['error'])?>
                                <?php if(isset($_SESSION['success'])){ ?>
                                    <div class="alert alert-success mt-2" role="alert">
                                        <?= $_SESSION['success'] ?>
                                    </div>
                                <?php } unset($_SESSION['success'])?>
                            </div>
                            <div class="center" style="display: flex;justify-content: center;">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Blog Categories</h4>
                        <?php if(isset($_SESSION['delete'])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?= $_SESSION['delete'] ?>
                            </div>
                        <?php } unset($_SESSION['delete'])?>
                        <?php if(isset($_SESSION['error'])){ ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?= $_SESSION['error'] ?>
                            </div>
                        <?php } unset($_SESSION['error'])?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql = "SELECT * FROM categories";
                                    $result = mysqli_query($db_connect, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($categories = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?= $categories['id'] ?></td>
                                            <td><?= $categories['category_name'] ?></td>
                                            <td>
                                                <span>
                                                    <a href="../categories/deleteCategory.php?id=<?= $categories['id']?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a>
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
<!--**********************************
    Content body end
***********************************-->

<?php
require '../dashboard/dashboard_footer.php';
?>