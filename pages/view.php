<?php
require_once'../config/DbFunction.php';
require_once'../models/data.php';

$obj=new Data();
$auth=new DbFunctionn();
$result=$auth->showregister();

if(isset($_GET['del']))
{
    $id=$_GET["del"];
    $auth->deletestudent($id);
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
    <title>View Students</title>
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
                   <h4 class="page-header"> <?php ?></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View Students
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SNo</th>
											<th>RegNo</th>
											<th>Name</th>
                                            <th>Email</th>
                                            <th>MobNO</th>
											<th>Course</th>
											<th>Subject</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                         $sn=1;
                                     foreach($result as $res=>$p){ ?>	
									 
                                        <tr class="odd gradeX">
                              <td><?php echo $sn?></td>
                              <td><?php echo htmlentities($result[$res]["id"]);?></td>
             <td><?php echo htmlentities(strtoupper($result[$res]["firstname"]." ".$result[$res]["middlename"]." ".$result[$res]["lastname"]));?></td>
       <td><?php echo htmlentities(strtoupper($result[$res]["emailid"]));?></td>
	  <td><?php echo htmlentities($result[$res]["mobillenumber"]);?></td>
	  <td><?php echo htmlentities(strtoupper($result[$res]["cshort"]));?></td>
      <td><?php echo htmlentities(strtoupper($result[$res]["sub"]));?></td>											  
      <td>&nbsp;&nbsp;<a href="edit-std.php?id=<?php echo htmlentities($result[$res]["id"]);?>">
	  <p class="fa fa-edit"></p></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="view.php?del=<?php echo htmlentities($result[$res]["id"]); ?>">
	  <p class="fa fa-times-circle"></p>
	  
	  </td>
                                            
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

 
</body>

</html>
