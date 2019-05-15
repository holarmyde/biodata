<?php 
include "vars.php";
if(!$_FILES['file']['error'])
	{
		if($_FILES['file']['size'] >= 50000)
			{
				echo "file size should not exceed 50kb";
			}
			else
			{
				if($_FILES['file']['type'] != 'image/jpeg' &&  $_FILES['file']['type'] != 'image/jpg')
				{
					echo "file type is jpeg";
				}
				else
				{
					if(isset($_GET['whichFolder'])) $folder = $_GET['whichFolder'];
					
									
									$filename = $_POST['name'];
									
									$uploaddir = '../' . $folder . '/';
									$extensionArray = explode(".", $_FILES['file']['name']);
									$extension = strtolower(end($extensionArray));
									$uploadfile = $uploaddir . $filename . "." . $extension;
									
									//$filename = $uploadfile;
									
									if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) 
										{
											if($folder=='signature')
												{
													$conn = mysqli_connect($host,$usr,$pwd);
												if(!$conn)
												{
													die("i was unable to connect to the server");	
												}
												else
												{
													mysqli_select_db($conn, $db);
													$sql = "UPDATE students SET completionStatus = 'complete' WHERE matricNo='$filename'";
													$result = mysqli_query($conn, $sql);
														if($result)
														{
															
														}
														else
														{
															
														}
												}
												}
					
					
													echo "File is valid, and was successfully uploaded.\n";
										} else {
													echo "Possible file upload attack!\n";
										}
				}
			}
					


	}
?>