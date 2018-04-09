<?php session_start(); ?>


  
 <?php
include 'dbms.php';
if(isset($_POST['ok']))
{

$email1=$_POST['email'];

//echo $_SESSION['user_id'];

$sql="SELECT * FROM `user` WHERE email_id='$email1'";


$result=mysqli_query($conn,$sql);

echo $sql;
if(!$row=mysqli_fetch_assoc($result) )
	{
		echo '<script>alert("wrong info.");';
        	echo 'window.location= "forgetpw.html";</script>';
	}
	else 
	{	
        $_SESSION['email']=$email1;
		header("location: forget.html");
        
	}
}
$conn->close();
?>

</div>