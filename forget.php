<?php session_start(); 

    
    
	 
		if(isset($_REQUEST['forget'])){
			echo '<script>alert("Password changed.");';
        	echo 'window.location= "log.html";</script>';
			
		}
	
include 'dbms.php';
if(isset($_POST['done']))
{
$new_password=$_POST['new_password'];
$again_password=$_POST['again_password'];

$email1=$_SESSION['email'];
	if($new_password != $again_password)
	{
	  echo '<script>alert("Password not matched.");';
        	echo 'window.location= "forget.html";</script>';
	  
	}
	else{
		echo $email1;
		$sql="UPDATE `user` SET `password`='$new_password' WHERE email_id='$email1'";
		mysqli_query($conn,$sql);
		header("location: forget.php?forget=1");
		$conn->close();
	
		
		}
}
?>

