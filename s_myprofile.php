<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="d_files/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="d_files/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="d_files/css/matrix-style.css" />
        <link rel="stylesheet" href="d_files/css/matrix-media.css" />
        <link href="d_files/font-awesome/css/font-awesome.css" rel="stylesheet" />

    </head>
    <body>
        <!--Header-part--><!--sidebar-menu-->
        <?php include 's_sidebar.php' ?>
        <!--sidebar-menu--><!--close-top-serch-->
        <?php include 's_backend.php' ?>    
        <div id="content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>My Personal-info</h5>
                            </div>
                            <div class="widget-content nopadding ">
                                <?php echo $data ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row-fluid">
                    <div class="span6">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>Edit Personal-info</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form action="s_myprofile.php" method="POST" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Name :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" name="chname" placeholder="<?php echo $name ?>" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Mobile Number :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" name="chphone" placeholder="<?php echo $phone ?>" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"> Course :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" name="chcourse" placeholder="<?php echo $course ?>" />
                                        </div>
                                    </div>


                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="chcontent">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="container-fluid"><hr>
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="widget-box">
                                        <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                                            <h5>Change Password</h5>
                                        </div>
                                        <div class="widget-content nopadding">
                                            <form id="form-wizard" class="form-horizontal" method="post" action="s_myprofile.php">
                                                <div id="form-wizard-1" class="step">

                                                    <div class="control-group">
                                                        <label class="control-label">Password</label>
                                                        <div class="controls">
                                                            <input id="password" type="password" name="password" />
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <label class="control-label">Confirm Password</label>
                                                        <div class="controls">
                                                            <input id="password2" type="password" name="password2" />
                                                        </div>
                                                    </div>
                                                </div>              
                                                <div class="form-actions">
                                                    <input id="back" class="btn btn-primary" type="reset" value="Reset" />
                                                    <input id="next" class="btn btn-primary" type="submit" value="Submit" name="change" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
