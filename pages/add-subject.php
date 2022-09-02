<?php

require_once'../config/DbFunction.php';
require_once'../models/course.php';
require_once'../models/subject.php';
$auth=new Dbfunctionn();
$res=$auth->showcources();
if(isset($_POST["course-short"]) && isset($_POST["course-full"]) && isset($_POST["sub1"]) && isset($_POST["sub2"]))
{
	if(!empty($_POST["course-short"]) && !empty($_POST["course-full"]) && !empty($_POST["sub1"]) && !empty($_POST["sub2"]))
	{  
		$course=new Course();
        $subject=new Subject();
        //$auth=new Dbfunctionn();
		
	
		$course->cs=$_POST["course-short"];
		$course->cf=$_POST["course-full"];
		$subject->s1=$_POST["sub1"];
		$subject->s2=$_POST["sub2"];
		$subject->s3=$_POST["sub3"];
		if($auth->addsubject($course,$subject))
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
<title></title>
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" >
	<div id="wrapper">

		<!-- Navigation -->
		<?php include('leftbar.php')?>;


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
						<div class="panel-heading">Add Subject</div>
						<div class="panel-body">
							<div class="row">
						 	<div class="col-lg-10">
									
										<div class="form-group">
											<div class="col-lg-4">
					 <label>Course Short Name<span id="" style="font-size:11px;color:Red">*</span>	</label>
											</div>
			
			<div class="col-lg-6">
			<select class="form-control" name="course-short" id="cshort"  required="required" >
			<option VALUE="">SELECT</option>
				<?php foreach($res as $r=>$x){?>							
			
                        <option VALUE="<?php echo htmlentities($res[$r]["id"]);?>"><?php echo htmlentities($res[$r]["cshort"])?></option>
                        
                        
                    <?php }?>   			</div>
											 
                        </select>
					<span id="course-availability-status" style="font-size:12px;"></span>	
					</div>
					    </div>	
										
								<br><br>
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>Course Full Name<span id="" style="font-size:11px;color:red">*</span></label>
		</div>
		<div class="col-lg-6">
		<select class="form-control" name="course-full"  id="cfull"required="required" onchange="coursefullAvail()">
        <option VALUE="">SELECT</option>
        <?php foreach($res as $r=>$x){?>							
			
     <option VALUE="<?php echo htmlentities($res[$r]["cfull"]);?>"><?php echo htmlentities($res[$r]["cfull"])?></option>
                        
                        
                    <?php }?>   
       </select>
	   <span id="course-status" style="font-size:12px;"></span>
	 </div>
	 </div>	
	<br><br>								
								
		<div class="form-group">
		<div class="col-lg-4">
		<label>Subject1</label>
		</div>
		<div class="col-lg-6">
		<input class="form-control"  name="sub1">
	</div>
	 </div>	
	<br><br>	

     <div class="form-group">
		<div class="col-lg-4">
		<label>Subject2</label>
		</div>
		<div class="col-lg-6">
		<input class="form-control"  name="sub2">
	 </div>
	 </div>	
	<br><br>									
	<div class="form-group">
	<div class="col-lg-4">
	 <label>Subject3</label>
	</div>
	<div class="col-lg-6">
	<input class="form-control"  name="sub3">
	
	</div>
	</div>
	</div>	
	<br><br><br>								
										
	<div class="form-group">
											<div class="col-lg-4">
												
											</div>
											<div class="col-lg-6"><br><br>
	<input type="submit" class="btn btn-primary" name="submit" value="Add Subject"></button>
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
