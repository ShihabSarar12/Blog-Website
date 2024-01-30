<?php
    require 'dashboard_header.php';
    if(empty($_SESSION["email"]) && empty($_SESSION["password"])){
        header("Location: http://localhost/SD_Project/backend/dashboard/dashboard.php");
    }
?>
 <!--**********************************
    Content body start
***********************************-->
 <div class="content-body">
     <div class="container-fluid mt-3">
         <div class="row">
             <div class="col-lg-12 col-sm-3">
                 <div class="card gradient-1">
                     <div class="card-body">
                         <h3 class="card-title text-white">Howdy <?=$user['role'];?></h3>
                         <div>
                            <!-- FIXME have to fix resize window div getting smaller problem -->
                            <?php
                                echo '<h2 class="text-wrap text-white">' . $_SESSION["email"] . '</h2>';
                                // print_r($_SESSION);
                            ?>
                             <p class="text-white mb-0">Jan 2024</p>
                         </div>
                         <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
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

    require 'dashboard_footer.php';
    ?>