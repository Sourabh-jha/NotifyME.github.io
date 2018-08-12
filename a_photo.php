<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portal</title>
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
        <?php include 'a_sidebar.php' ?>
        <!--sidebar-menu--><!--close-top-serch-->


        <!--main-container-part-->
        <div id="content">

            <div class="container-fluid">
                <hr>
                <div class="row-fluid">
                    <div class="span6">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>Photos</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form action="#" method="get" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Name :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" placeholder="Full name" id="required" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Description :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" placeholder="Description" id="required" />
                                        </div>
                                    </div>
                                    <div class="control-group">

                                        <label class="control-label">File upload input</label>
                                        <div class="controls">
                                            <input type="file" accept="image/" />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success" >Save</button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </body>
</html>  