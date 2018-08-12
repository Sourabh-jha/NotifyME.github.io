<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Faculty Portal</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="d_files/css/bootstrap.min.css" />
        <link rel="stylesheet" href="d_files/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="d_files/css/matrix-style.css" />
        <link rel="stylesheet" href="d_files/css/matrix-media.css" />
        <link href="d_files/font-awesome/css/font-awesome.css" rel="stylesheet" />
    </head>
    <body>

        <!--Header-part--><!--sidebar-menu-->
        <?php include 'f_sidebar.php' ?>
        <!--close-top-serch--><!--sidebar-menu-->
        <?php include 'f_backend.php' ?>
        <!--main-container-part-->

        <div id="content">
            <!--breadcrumbs-->
            <div id="content-header">
                <div id="breadcrumb"> <a href="f_dashboard.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
            </div>
            <!--End-breadcrumbs-->

            <!--Action boxes-->
            <div class="container-fluid">
                <div class="quick-actions_homepage">
                    <ul class="quick-actions">
                        <li class="bg_lb"> <a href="f_dashboard.php"> <i class="icon-home"></i>  Home </a> </li>
                        <li class="bg_lg span2"> <a href="f_myprofile.php"> <i class="icon-user"></i> My Profile</a> </li>
                        <li class="bg_ly"> <a href="f_announcements.php"> <i class="icon-envelope"></i> Announcements </a> </li>
                        <li class="bg_lo"> <a href="f_notes.php"> <i class="icon-book"></i> Notes</a> </li>
                        <li class="bg_ls"> <a href="f_submissions.php"> <i class="icon-file"></i> Submissions</a> </li>

                    </ul>
                </div>
                <!--End-Action boxes-->    

                <hr/>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
                                <h5>Latest Posts</h5>
                            </div>
                            <div class="widget-content nopadding collapse in" id="collapseG2">
                                <ul class="recent-posts">
                                    <?php echo $data1 ; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
