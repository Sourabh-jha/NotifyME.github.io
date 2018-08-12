<!DOCTYPE html>
<html>
    <head>
        <title>
          Project Submissions
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
        <!--close-top-serch--><!--sidebar-menu-->
        <div id="content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                                <h5>Submited Assingments</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Student Email</th>
                                            <th>Subject</th>
                                            <th>dated</th>
                                            <th>Description</th>
                                            <th>Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                        <?php include 'f_backend.php' ?>

                                        <?php
    include('dbconnect.php');
        $i=0;
        $email="";
        $sname ="";
        $subject = "";
        $description="";
        $date = "";
        $notes = "";
        $sql = "select * from submission where subject='".$sub."';";
        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $sname=$row['sname'];
            $email=$row['s_email'];
            $subject = $row['subject'];
            $description=$row['description'];
            $date = $row['date'];
            $notes = $row['notes'];
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $sname ?></td>
                                            <td><?php echo $email ?></td>
                                            <td><?php echo $subject ?></td>   
                                            <td><?php echo $date ?></td>
                                            <td><?php echo $description ?></td>
                                            <td><a href="<?php echo $notes ?>" download><button class="btn btn-primary btn-mini">Download</button></a></td>

                                        </tr>
                                        <?php $i++; }
        mysqli_close($connection);
                                        ?>  
                                    </tbody>  
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
