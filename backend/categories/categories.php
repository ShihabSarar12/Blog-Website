<?php
    require '../dashboard/dashboard_header.php';
?>

<div class="row">
    <div class="col-lg-4 col-sm-4">
        <div class="card gradient-1">
            <div class="card-body">
            <form action="addCategories.php" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Add Blog Category</label>
                    <input type="text" class="form-control" id="" placeholder="Category Name" aria-describedby="categoryName">
                    <input type="hidden">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-sm-8">
        <div class="card gradient-3">
            <div class="card-body">
                <h4 class="card-title">Table Stripped</h4>
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped verticle-middle">
                        <thead>
                            <tr>
                                <th scope="col">Task</th>
                                <th scope="col">Progress</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Label</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Air Conditioner</td>
                                <td>
                                    <div class="progress" style="height: 10px">
                                        <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                        </div>
                                    </div> 
                                </td>
                                <td>Apr 20,2018</td>
                                <td><span class="label gradient-1 btn-rounded">70%</span>
                                </td>
                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Textiles</td>
                                <td>
                                    <div class="progress" style="height: 10px">
                                        <div class="progress-bar gradient-2" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                        </div>
                                    </div> 
                                </td>
                                <td>May 27,2018</td>
                                <td><span class="label gradient-2 btn-rounded">70%</span>
                                </td>
                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    require '../dashboard/dashboard_footer.php';
?>
