<?php
session_start ();


require_once'../config/DbFunction.php';
require_once'../models/course.php';

$obj=new DbFunctionn();
$course=new Course();
$result=$obj->showcources();

if(isset($_GET['del']))
{
    $id=$_GET['del'];

    $obj->deletecources($id);
   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>view course</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
      
     <?php include('leftbar.php')?>;

           
         <nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <h4 class="page-header"></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View Course
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Short Name</th>
                                            <th>Full Name</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                   
                                    <?php
                                    $sn=1;
                                    foreach($result as $r=>$p){
                                         ?>	
                                         <tr class="odd gradeX">
                                            <td><?php echo $sn?></td>
                                            <td><?php echo (strtoupper($result[$r]["cfull"]));?></td>
                                            <td><?php echo ($result[$r]["cshort"]);?></td>
                                            <td><?php echo htmlentities(strtoupper($result[$r]["cdate"]));?></td>
                                            <td>&nbsp;&nbsp;<a href="edit-course.php?cid=<?php echo (htmlentities($result[$r]['id']));?>"><p class="fa fa-edit"></p></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="view-course.php?del=<?php echo(htmlentities($result[$r]["id"])); ?>"> <p class="fa fa-times-circle"></p></td>
                                            
                                        </tr>
                                        
                                    <?php $sn++;}?>
                                        
                                    	           
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  

</body>

</html>
