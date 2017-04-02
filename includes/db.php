<?php
class DB 
{
	function __construct(){
		$this->dbConnect();
		$this->userTable = 'users';
	}
	
	function dbConnect(){
		// database configuration
		$dbServer = 'localhost';
		$dbUsername = 'root';
		$dbPassword = '';
		$dbName = 'linkedinlogin';
		$conn = new mysqli($dbServer,$dbUsername,$dbPassword,$dbName);
		if($conn){
			$this->db = $conn;
		}else{
			die("Database conection error: ".$conn->connect_error);
		}
	}
	
	function checkUser($userdata){
		$oauth_uid = $userdata->id;
		$email = $userdata->emailAddress;
		$check = $this->db->query("SELECT * FROM $this->userTable WHERE oauth_uid = '".$oauth_uid."' AND email = '".$email."'");
		if(mysqli_num_rows($check) > 0){
			$result = $check->fetch_array(MYSQLI_ASSOC);
			$query = "UPDATE $this->userTable SET fname = '".$userdata->firstName."', lname = '".$userdata->lastName."', email = '".$userdata->emailAddress."', location = '".$userdata->location->name."', country = '".$userdata->location->country->code."', picture_url = '".$userdata->pictureUrl."', profile_url = '".$userdata->publicProfileUrl."', modified = '".date("Y-m-d H:i:s")."' WHERE id = ".$result['id'];
			$this->db->query($query);
			return $result['id'];
		}else{
			$query = "INSERT INTO 
						$this->userTable(oauth_provider,oauth_uid,fname,lname,email,location,country,picture_url,profile_url,created,modified) 
						VALUES('linkedin','".$userdata->id."','".$userdata->firstName."','".$userdata->lastName."','".$userdata->emailAddress."','".$userdata->location->name."','".$userdata->location->country->code."','".$userdata->pictureUrl."','".$userdata->publicProfileUrl."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."')";
			$this->db->query($query);
			return $this->db->insert_id;
		}
	}
}
?>