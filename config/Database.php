<?php
require_once '../models/course.php';
class Database {
	public $db;
	public function open()
	{
		$this->db=new mysqli("localhost","root","","school");
		if($this->db->connect_error)
		{
			echo"error connection";
			return false;
		}
		else
		{
			echo"true connection";
			return true;
		}
	}
	public function select($qr)
	{
		$result=$this->db->query($qr);
		if(!$result)
		{
			echo"query error";
			return false;
		}
		else
		{
			echo"ok query,";
			return $result->fetch_all(MYSQLI_ASSOC);
		}
	}
	public function closeconnection()
    {
        if($this->db)
        {
            $this->db->close();
        }
    }
	public function insert($qr)
	{
		$result=$this->db->query($qr);
		if(!$result)
		{
			echo"query error";
			return false;
		}
		else
		{
			echo"ok query,";
			return $this->db->insert_id;
		}

	}
	public function update($qr)
	{
		$result=$this->db->query($qr);
		if(!$result)
		{
			echo"query error";
			return false;
		}
		else
		{
			echo"ok query,";
			return true;
		}

	}
	


	
	
	


}
?>