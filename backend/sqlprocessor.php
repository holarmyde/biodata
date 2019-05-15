<?php 
include "vars.php";

// login section
if(isset($_GET['authentication']))
{
	if($_GET['authentication']=='yes')
	{
		header("Content-type: application/json");
		$data = file_get_contents("php://input");
		$data = json_decode($data);
		$username = $data->username;
		$mypassword = $data->password;
		
		
		// working with the database
			$conn = mysqli_connect($host,$usr,$pwd);
				if(!$conn)
				{
					die("i was unable to connect to the server");	
				}
				else
				{
					mysqli_select_db($conn, $db);
					$sql = "SELECT * FROM users WHERE username='$username' AND userPassword = '$mypassword'";
					$result = mysqli_query($conn, $sql);
						if($result)
						{
							if(mysqli_num_rows($result)>0)
							{
							  $response = array();
							  $row = mysqli_fetch_object($result);
							  $response['status'] = "ok";
							  $response['data'] = $row;
							  //$response['realName'] = $row;
							  echo json_encode($response);
							}
							 else
							 {
								$response = array();
								$response['status'] = "not ok";
								$response['data'] = "";
								echo json_encode($response);
								 
								 
								 
								 
								}
							
							
						}
						else
						{
							$response = array();
							$response['status'] = "not ok";
							$response['data'] = "query error";
							echo json_encode($response);
							
						
						}
					
				
				}
			
			
		
		
		// end of working with the database
	}
	
	
}

// login section
if(isset($_GET['fetchStudent']))
{
	if($_GET['fetchStudent']=='yes')
	{
		header("Content-type: application/json");
		$data = file_get_contents("php://input");
		$data = json_decode($data);
		$number = $data->number;
		
		
		// working with the database
			$conn = mysqli_connect($host,$usr,$pwd);
				if(!$conn)
				{
					die("i was unable to connect to the server");	
				}
				else
				{
					mysqli_select_db($conn, $db);
					$sql = "SELECT * FROM students WHERE matricNo = '$number'";
					$result = mysqli_query($conn, $sql);
						if($result)
						{
							if(mysqli_num_rows($result)>0)
							{
							  $response = array();
							  $row = mysqli_fetch_object($result);
							  $response['status'] = "ok";
							  $response['data'] = $row;
							  //$response['realName'] = $row;
							  echo json_encode($response);
							}
							 else
							 {
								$response = array();
								$response['status'] = "not ok";
								$response['data'] = "";
								echo json_encode($response);
								 
								 
								 
								 
								}
							
							
						}
						else
						{
							$response = array();
							$response['status'] = "not ok";
							$response['data'] = "query error". mysqli_error($conn);
							echo json_encode($response);
							
						
						}
					
				
				}
			
			
		
		
		// end of working with the database
	}
	
	
}






// end of login section



?>