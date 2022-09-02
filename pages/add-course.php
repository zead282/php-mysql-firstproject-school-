
<?php

require_once'../config/DbFunction.php';
require_once'../models/course.php';

//session_start ();

if(isset($_POST["course-short"]) && isset($_POST["course-full"]))
{
	if(!empty($_POST["course-short"]) && !empty($_POST["course-full"]))
	{ 
		$course=new Course();
		$auth=new Dbfunctionn();
		$course->cs=$_POST["course-short"];
		$course->cf=$_POST["course-full"];
		$course->cd=$_POST["cdate"];
		if($auth->createcourse($course))
		{
			header("location:view-course.php");
		}
		
		



	}
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

<title>add course</title>

<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css"
	rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css"
	rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<?php include('leftbar.php')?>;

<!--nav-->
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="page-header"></h4>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
<form id="formAuthentication" class="mb-3" action="add-course.php" method="POST">	
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Add Course</div>
						<div class="panel-body">
							<div class="row">
						 	<div class="col-lg-10">
									
										<div class="form-group">
											<div class="col-lg-4">
					 <label>Course Short Name<span id="" style="font-size:11px;color:red">*</span>	</label>
											</div>
											<div class="col-lg-6">
			
  <input class="form-control" name="course-short" id="cshort" required="required">       
							<span id="course-availability-status" style="font-size:12px;"></span>				</div>
											
										</div>	
										
								<br><br>
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>Course Full Name<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		<input class="form-control" name="course-full" id="cfull" required="required" >         
	<span id="course-status" style="font-size:12px;"></span>				</div>
	 </div>	
										
	 <br><br>								
										
	<div class="form-group">
	<div class="col-lg-4">
	 <label>Creation Date</label>
	</div>
	<div class="col-lg-6">
	<input class="form-control" value="<?php echo date('d-m-Y');?>" readonly="readonly" name="cdate">

	
	</div>
	</div>
	</div>	
										
		<br><br>		
		
							<div class="form-group">
											<div class="col-lg-4">
												
											</div>
											<div class="col-lg-6"><br><br>
							<input type="submit" class="btn btn-primary" name="submit" value="Create Course"></button>
											</div>
											
										</div>		
													
				</div>

					</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		

	</div>
	

</form>
</body>

</html>
