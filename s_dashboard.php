<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Portal</title>
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
        <?php include 's_sidebar.php' ?>
       
        <?php include 's_backend.php' ?>
        <!--main-container-part-->
        <div id="content">
            <!--breadcrumbs-->
            <div id="content-header">
          <!--Action boxes-->
                <div class="container-fluid">
                    <div class="quick-actions_homepage">
                        <ul class="quick-actions">
                            <li class="bg_lb"> <a href="s_dashboard.php"> <i class="icon-home"></i>  Home </a> </li>
                            <li class="bg_lg span2"> <a href="s_myprofile.php"> <i class="icon-user"></i> My Profile</a> </li>
                            <li class="bg_lo"> <a href="s_notes.php"> <i class="icon-book"></i> Notes</a> </li>
                            <li class="bg_ls"> <a href="s_projects.php"> <i class="icon-file"></i>Projects Submissions</a> </li>

                        </ul>
                    </div>
                    <!--End-Action boxes-->    
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="widget-box">
                                <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
                                    <h5>Latest Posts</h5>
                                </div>
                                <div class="widget-content nopadding collapse in" id="collapseG2">
                                    <ul class="recent-posts">
                                        <?php echo $data1; ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
