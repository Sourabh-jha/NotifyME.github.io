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
        <!--main-container-part-->
        <div id="content">

            <div class="container-fluid">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                                <h5>Registered Teachers</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Qualification</th>
                                            <th>Subject</th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- php for printing announcement -->
                                        <?php
    include 'dbconnect.php';
        $name="";
        $email="";
        $phone="";
        $degree="";
        $sub="";
        $i=0;
        $sql = "select * from teacher;";
        $result = mysqli_query($connection, $sql);
        while($row = mysqli_fetch_array($result)){
            $email =$row['email'];
            $name =$row['name'];
            $phone =$row['phone'];
            $degree =$row['degree'];
            $sub =$row['subject'];
                                        ?>
                                        <tr class='odd gradeX'>
                                            <td><?php echo $name ?></td>
                                            <td> <?php echo $email ?></td>
                                            <td><?php echo $phone ?></td>
                                            <td><?php echo $degree ?></td>
                                            <td><?php echo $sub ?></td>
                                        </tr>
                                        <?php $i++; }
        mysqli_close($connection);
                                        ?>
                                        <!-- / end of printting annountcement -->                  

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span6">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>Teacher Registration</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form action="a_addteacher.php" method="post" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Name :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" placeholder="Full name" id="required" name="name"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email :</label>
                                        <div class="controls">
                                            <input type="email" class="span11" placeholder="Email" id="required" name="email" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Password :</label>
                                        <div class="controls">
                                            <input type="password"  class="span11" placeholder="Password" id="required" name="pwd"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Qualification :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" placeholder="Qualification" id="required" name="qual"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Subject :</label>
                                        <div class="controls">
                                            <input type="text" class="span11" placeholder="Subject" id="required" name="sub"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Phone Number :</label>
                                        <div class="controls">
                                            <input type="tel" class="span11" placeholder="Phone No" id="required" name="phn"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success" name="save">Save</button>
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
