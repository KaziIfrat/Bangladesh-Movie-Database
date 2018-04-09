<?php
include 'dbms.php';
session_start();
if(isset($_POST['submit']))
{
    $msg='';
$username1=$_POST['username'];
$password1=$_POST['password'];

    
$sql="select * from user where user_name='$username1' and password='$password1'";

$result=mysqli_query($conn,$sql);

    if(!$row=mysqli_fetch_assoc($result) )
	{
		$msg= "<h4>Your userid or password is incorrct!</h4>";
        //echo $msg;
	}
	else 
	{ 
			$_SESSION['user_id'] = $row['user_id']; 
			
			header("location: index.php");
	}
	
}
else {
    $html = file_get_contents("log.php"); 
    echo $html;
}
?>