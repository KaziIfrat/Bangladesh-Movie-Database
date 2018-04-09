

<?php
include 'dbms.php';

if(isset($_POST['Signup']))
{
$username1=$_POST['user_name'];
$password1=$_POST['password'];
$email1=$_POST['email_id'];
$em="";

$sql="INSERT INTO `user`(`user_id`,`user_name`, `email_id`, `password`) VALUES ('$em','$username1','$email1','$password1')";

$result=mysqli_query($conn,$sql);

if($result == true )
	{
		
       
		header("location: log.html");

		//echo "Your userid or password is incorrct!";
	}
	
	else 
	{
			echo "signup process Unsuccessfull!!";
			header("location: signup.php");
            
	}
	
}
?>