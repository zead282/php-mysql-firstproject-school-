
<?php
require_once 'Database.php';
require_once '../models/user.php';
require_once '../models/course.php';
require_once '../models/subject.php';
require_once '../models/data.php';

class DbFunctionn{
	public $db;
	public function login(User $user)
	{
		$this->db=new Database;
		if($this->db->open())
		{
			$query="SELECT * FROM login WHERE name='$user->username' AND password='$user->userpassword';";
			$result=$this->db->select($query);
			if($result===false)
			{
				echo"result false  ";
				return false;

			}
			else
			{
				if(count($result)==0)
				{
					echo"result false 2 ";
					
					return false;
				}
				else
				{
					//session_start();
					$_SESSION["userid"]=$result[0]["id"];
					$user->userid=$_SESSION["userid"];
					$_SESSION["username"]=$result[0]["name"];
					$_SESSION["userpass"]=$result[0]["password"];
					//$_SESSION["username"]=$result[0]["name"];
					//$_SESSION["userpassword"]=$result[0]["password"];
					echo"okk log";
					$this->db->closeconnection();
					return true;
					
					
				}

			}
		}
		else
		{
			echo"error connection2";
		}
	}
	public function createcourse(Course $course)
	{
		$this->db=new Database;
		if($this->db->open())
		{
			
			$query="INSERT INTO course (`id`, `cshort`, `cfull`, `cdate`) VALUES (NULL, '$course->cs', '$course->cf', '$course->cd')";
			$result=$this->db->insert($query);
			if($result!=false)
			{  
			
				//session_start();
                //$_SESSION["cid"]=$result[0]["id"];
				
               
//$_SESSION["courseid"]=$course->cid;
                //$_SESSION["userrole"]=$result[0]["roleid"];
                 $this->db->closeconnection();
                return true;

			}

		}
	}
	public function showcources()
	{
		$this->db=new Database;
		if($this->db->open())
		{
			$query="SELECT * FROM course";
			$result=$this->db->select($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}
	public function showsubject()
	{
		$this->db=new Database;
		if($this->db->open())
		{
			$query="SELECT * FROM subject";
			$result=$this->db->select($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}


	
	public function editcources(Course $course)
	{
		$this->db=new Database;
		if($this->db->open())
		{
			
			$query="update course set cshort='$course->cs',cfull='$course->cf' ,cdate='$course->cd' where id='$course->cid'";
			
			$result=$this->db->update($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}
		
	public function editsubject(Subject $subject)
	{
		$this->db=new Database;
		if($this->db->open())
		{
			
			$query="update subject set sub1='$subject->s1',sub2='$subject->s2' ,sub3='$subject->s3' where id=$subject->sid";
			
			$result=$this->db->update($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}

	public function deletecources($id)
	{
		$this->db=new Database;
		if($this->db->open())
		{
			
			$query="delete from course where id='$id'";
			
			$result=$this->db->update($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}
    public function deletesubject($id)
	{
		$this->db=new Database;
		if($this->db->open())
		{
			
			$query="delete from subject where id='$id'";
			
			$result=$this->db->update($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}
	public function addsubject(Course $course,Subject $s)
	{
		$this->db=new Database;
		if($this->db->open())
		{
			
			$query="INSERT INTO `subject` (`id`, `cfull`, `sub1`, `sub2`, `sub3`, `cshort`) VALUES (NULL, '$course->cf', '$s->s1', '$s->s2', '$s->s3', '$course->cs')";
			

			
			$result=$this->db->insert($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}
	public function register(Data $data)
	{
		$this->db=new Database;                                               
		
		if($this->db->open())
		{
			                                                                                                                                                                                                                      
			
			$query="INSERT INTO `register`(`id`, `firstname`, `middlename`, `lastname`, `gender`, `nationality`, `famillyincome`, `mobillenumber`, `emailid`, `occupation`, `category`, `physically`, `guardianname`, `cshort`, `sub`) VALUES('null','$data->firstname','$data->middlename','$data->lastname','$data->gender','$data->nationality','$data->familyincome','$data->mobilenumber','$data->emailid','$data->occupation','$data->category','$data->physically' ,'$data->guardianname','$data->cshort','$data->sub')";
			
               
			
			$result=$this->db->insert($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}
	public function showregister()
	{
		$this->db=new Database;                                               
		
		if($this->db->open())
		{
			                                                                                                                                                                                                                      
			
			$query="select * from register";
			
               
			
			$result=$this->db->select($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}
	public function deletestudent($id)
	{
		$this->db=new Database;                                               
		
		if($this->db->open())
		{
			$query="delete from register where id='$id'";
			$result=$this->db->update($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}
	public function editstudent(Data $data)
	{
		$this->db=new Database;
		if($this->db->open())
		{
			
			$query="UPDATE register SET firstname='$data->firstname',middlename='$data->middlename',lastname='$data->lastname',gender='$data->gender',nationality='$data->nationality', famillyincome ='$data->familyincome',`mobillenumber`='$data->mobilenumber', emailid='$data->emailid', occupation='$data->occupation',category='$data->category',`physically`='$data->physically',`guardianname`='$data->guardianname',`cshort`='$data->cshort',`sub`='$data->sub' WHERE id='$data->id'";
			
			$result=$this->db->update($query);
			if($result!=false)
			{
			
				 $this->db->closeconnection();
				return $result;
			}
		}
	}


	
	


}

?>



