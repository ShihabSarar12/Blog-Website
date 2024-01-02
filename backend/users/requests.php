<?php
    require '../dashboard/dashboard_header.php';
?>

<!--**********************************
    Content body start
***********************************-->

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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Post</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>
                                            <span>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Accept">
                                                    <i class="fa fa-check color-muted m-r-5"></i>
                                                </a>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reject">
                                                    <i class="fa fa-close color-danger"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
<!--**********************************
    Content body end
***********************************-->

<?php
    require '../dashboard/dashboard_footer.php';
?>