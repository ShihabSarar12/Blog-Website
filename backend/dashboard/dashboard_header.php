
<?php
    session_start();
    if(empty($_SESSION["email"]) && empty($_SESSION["password"])){
        header("Location: http://localhost/SD_Project/backend/login/login.php");
    }
    include '../database/db.php';
    $email = mysqli_real_escape_string($db_connect, $_SESSION['email']);
    $sql = "select role from users where email = '$email'";
    $sql_result = mysqli_query($db_connect,$sql);
    $user = mysqli_fetch_assoc($sql_result);
    $role = $user['role'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="synexdigital" />
  
    <title>Blog Post</title>
    <!-- Pignose Calender -->
    <link href="../../assets/backend/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../../assets/backend/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../../assets/backend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../../assets/backend/css/style.css" rel="stylesheet">
    
    <!-- summernote -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header" style="background-color: #FEA58F;">
        <div class="brand-logo">
            <span class="brand-title">
                <img src="../../assets/backend/images/logo3.jpg" alt="">
            </span>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">    
        <div class="header-content clearfix">
            
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-left">
                <div class="input-group icons">
                    <div class="drop-down animated flipInX d-md-none">
                    </div>
                </div>
            </div>
            <div class="header-right">
                    <li class="icons dropdown show">
                        <div class="user-img c-pointer position-relative mr-3 mt-5"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="../../uploads/user/<?=$_SESSION['photo']?>" style="height:70px; width:70px !important"  alt="">
                        </div>
                        <div class="mt-4">
                            <form action="../logout/logout.php" method="post">
                                <input type="hidden" value="logout" name="logout">
                                <button type="submit" class="btn login-form__btn submit w-100 text-white" name="logout" value="logout">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">           
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Author Dashboard</li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="../dashboard/dashboard.php">Home</a></li>
                        <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                    </ul>
                </li>

                <li class="mega-menu mega-menu-sm">
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Blog</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="../userRole/writeBlog.php">Write Blog</a></li>
                        <li><a href="../userRole/allBlogs.php">Your Blogs</a></li>
                    </ul>
                </li>

                <?php if($role=='admin'){ ?>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../users/requests.php">Request</a></li>
                            <li><a href="../users/post.php">Post</a></li>
                            <li><a href="../users/allUsers.php">All Users</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../categories/categories.php">All Categories</a></li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

