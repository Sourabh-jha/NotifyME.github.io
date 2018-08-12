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
        <?php include 'a_backend.php' ?>

        <div id="content">
            <div id="content-header">


            </div>
            <div class="container-fluid">
               
                <div class="row-fluid">
                    <div class="span6">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>Add Circulars</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form action="a_Circulars.php" method="post" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Description :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" placeholder="Description" id="required" name="des" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Venue :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" placeholder="Venue" name="venue" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Link :</label>
                                        <div class="controls">
                                            <input type="url"  class="span11" placeholder="Web Link" id="required" name="link" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Event Date :</label>
                                        <div class="controls">
                                            <input type="date" class="span11" name="date" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Event Time :</label>
                                        <div class="controls">
                                            <input type="time" class="span11" placeholder="HH-MM-SS" name="time"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success" name="post" >Save</button>
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
