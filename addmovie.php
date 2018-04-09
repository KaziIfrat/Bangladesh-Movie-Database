<?php
include 'dbms.php';
//if(!empty($_GET['movie_name'])){
if(isset($_POST['submit'])){
$Movie_name1=$_POST['movie_name'];
$Image1='dummy/'.$_POST['image'];
$Length1=$_POST['length'];
$Category1=$_POST['category'];
$Summary1=$_POST['summary'];
$Premiere1=$_POST['premiere'];
$Directors1=$_POST['directors'];
$Writers1=$_POST['writers'];
$Stars1=$_POST['stars'];



$sql="INSERT INTO `movie_details` ( `image`, `movie_name`, `summary`, `length`, `premiere`, `catagory`, `directors`, `writers`, `stars`) 
VALUES('$Image1','$Movie_name1','$Summary1','$Length1','$Premiere1','$Category1','$Directors1','$Writers1','$Stars1')";


$result=mysqli_query($conn,$sql);



if($result == true )
	{
		echo "<font color='red' >movie inserted </font>";
	}
	
	else 
	{
			echo "<font color='red'>movie insert fail</font>";
	}
}
//}
?>