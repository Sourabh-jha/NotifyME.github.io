<!DOCTYPE html>
<html>
    <head>
        <title>
          Annoucements
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
                                <h5>My Announcements</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Message</th>
                                            <th>Date</th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- php for printing announcement -->
                                        <?php
    include 'dbconnect.php';
        $event_date="";
        $message ="";
        $i=0;
        $sql = "select * from announcements where tid='".$user_check."' Order by adate DESC ;";
        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result)){
            $message =$row['announcement'];
            $publish_date=$row['adate'];

                                        ?>

                                        <tr class='odd gradeX'>
                                            <td><?php echo $message ?></td>
                                            <td> <?php echo $publish_date ?></td>
                                        </tr>
                                        <?php $i++; }
        mysqli_close($connection);
                                        ?>
                                        <!-- / end of printting annountcement -->                  

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- php for publishing -->
                        <?php    
                        include('dbconnect.php');
                        if(isset($_POST['publish']))
                        {
                            $message =$_POST['val'];
                            $sql = "INSERT INTO `announcements`(`tid`, `announcement`) VALUES ('".$user_check."','".$message."');";
                            if( mysqli_query($connection, $sql)){
                                echo "<script>alert('Published');</script>";
                                header("location:f_announcements.php");
                            }
                            else
                            {
                                echo "<script>alert('Something went wrong try again latter.');</script>";
                            }
                        }
                        mysqli_close($connection);
                        ?>       
                        <!-- /End of publish-->

                        <div class="row-fluid">
                            <div class="span6">
                                <div class="widget-box">
                                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                        <h5>Announcements</h5>
                                    </div>
                                    <div class="widget-content nopadding">
                                        <form action="f_announcements.php" method="post" class="form-horizontal">
                                            <div class="control-group">
                                                <label class="control-label">Message</label>
                                                <div class="controls">
                                                    <textarea class="span11" name="val" ></textarea>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-success" name="publish">Publish</button>
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
