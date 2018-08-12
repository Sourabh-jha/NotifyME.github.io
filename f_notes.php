<!DOCTYPE html>
<html>
    <head>
        <title>
          Notes
        </title>
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
        <?php include 'f_backend.php' ?>
        <!--close-top-serch--><!--sidebar-menu-->
        <div id="content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                                <h5>Uploaded Notes</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Subject Code</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>              
                                        <?php
    include('dbconnect.php');
        $row=array();
        $i=0;
        $id ="";
        $subject = "";
        $description="";
        $date = "";
        $notes = "";
        $sql = "select * from notes where t_mail='".$user_check."';";
        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result)){
            $id =$row['id'];
            $subject = $row['sub'];
            $description=$row['description'];
            $date = $row['date'];
            $notes = $row['notes'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $subject ?></td>
                                            <td><?php echo $description ?></td>   
                                            <td><?php echo $date ?></td>
                                            <td><a href="<?php echo $notes ?>" download><button class="btn btn-primary btn-mini">Download</button></a></td>

                                        </tr>
                                        <?php $i++; }
        mysqli_close($connection);
                                        ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <?php include 'f_notesupload.php' ?>



                        <div class="row-fluid">
                            <div class="span6">
                                <div class="widget-box">
                                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                        <h5>Assingment</h5>
                                    </div>
                                    <div class="widget-content nopadding">
                                        <form action="f_notes.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="control-group">
                                                <label class="control-label">Subject Code:</label>
                                                <div class="controls">
                                                    <input type="text" class="span11" name="scode" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Course:</label>
                                                <div class="controls">
                                                    <input type="text" class="span11" name="course" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Description:</label>
                                                <div class="controls">
                                                    <input type="text" class="span11" name="dis" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">File Upload:</label>
                                                <div class="controls">
                                                    <input type="file" name="file"/>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-success" name="upload">Upload</button>
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
    </body>
</html>
