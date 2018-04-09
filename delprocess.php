<html>

<?php
include 'dbms.php';

if(isset($_POST['delete']))
{

$mname=$_POST['dell'];




$sql="select * from movie_details where movie_name like '$mname'";
   $res=mysqli_query($conn,$sql);
       
    $row = mysqli_fetch_array($res);
    $mid=$row['movie_id'];
    
    
    
    
$sql="delete from songs where movie_id='$mid'";
       


       
       
   $res=mysqli_query($conn,$sql);
      // $row = mysqli_fetch_array($res);
  
    
    $sql="delete from movie_details where movie_name like '$mname'";
     $result=mysqli_query($conn,$sql);
     
    
    
if($result == true )
	{
		echo "<font color='red' >movie deleted </font>";
    
	}
	
	else 
	{
			echo "<font color='red'>movie delete fail</font>";
	} 
    header("location: del1.php");
    

}
?>

</html>

