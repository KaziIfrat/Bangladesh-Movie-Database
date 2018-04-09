<?php
session_start();

$lg = '';
if(!isset($_SESSION['user_id'])){
    $lg = ' <li class="menu-item"><a href="log_option.html">login</a> ';
}
else $lg = ' <li class="menu-item"><a href="logout.php">logout</a> ';



$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'bmdb';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
if(!empty($_GET['search'])){
    $v1 ="";
    
    if($_GET['search_type']=="movie"){
    
    $searchTerm = $_GET['search']; 
    //get matched data from skills table
    
    $sql="SELECT * FROM movie_details WHERE movie_name LIKE '".$searchTerm."%'";
    $result = $db->query($sql);
    
    
   
    if($result->num_rows>0)// and $row['movie_name']=="Aynabaji")
    {
        //echo $searchTerm;
        $v1 = $v1."<table border='2' > <tr>
        <td align=center><b>Movie Name</b></td></tr>";

     while($row = $result->fetch_assoc())
    {   
        $v1 = $v1 . "<tr>";
        //$v1 = $v1 . "<td align=center>".$row["movie_id"]."</td>";
        $v1 = $v1 . "<td align=center><a href=single.php?id=".$row["movie_id"].">".$row["movie_name"]."</td>";
    
        $v1 = $v1 . "</tr>";
    }
     $v1 = $v1 . "</table>";
       // echo $v1;
    }
    else 
    {
        $v1 = $v1 . "<h3>Not Found</h3>";
    } 
    $html= file_get_contents("search.html");
    $html= str_replace("---results---", $v1, $html);
    $html = str_replace("{{log}}", $lg, $html);
    echo $html;
    }
    else if($_GET['search_type']=="songs")
    {
        $searchTerm = $_GET['search']; 
    //get matched data from skills table
    
    $sql="SELECT * FROM songs WHERE song_name LIKE '".$searchTerm."%'";
    $result = $db->query($sql);
    
    
   
    if($result->num_rows>0)// and $row['movie_name']=="Aynabaji")
    {
        //echo $searchTerm;
        $v1 = $v1."<table border='2' > <tr>
        <td align=center><b>Song Name</b></td>  <td align=center><b>Movie Name</b></td> <td align=center><b>Video Link</b></td> <td align=center><b>Download Link</b></td></tr>";

     while($row = $result->fetch_assoc())
    {
        $mid=$row["movie_id"];
        $sql2="SELECT movie_name FROM movie_details WHERE movie_id = $mid";
    $result2 = $db->query($sql2);
        $row2 = $result2->fetch_assoc();
        $mname=$row2["movie_name"];
       
        
        $v1 = $v1 . "<tr>";
        $v1 = $v1 . "<td align=center>".$row["song_name"]."</td>";
       // $v1 = $v1 . "<td align=center>".$mname."</td>";
        $v1 = $v1 . "<td align=center><a href=single.php?id=".$row["movie_id"].">".$mname."</td>";
        $v1 = $v1 . "<td align=center><a href=" .$row["song_link"].">Watch Online</a></td>";
        $v1 = $v1 . "<td align=center><a href=" .$row["download_link"].">Download</a></td>";
    
        $v1 = $v1 . "</tr>";
    }
     $v1 = $v1 . "</table>";
       // echo $v1;
    }
    else 
    {
        $v1 = $v1 . "<h3>Not Found</h3>";
    } 
    $html= file_get_contents("search.html");
    $html= str_replace("---results---", $v1, $html);
    $html = str_replace("{{log}}", $lg, $html);
    echo $html;
        
        
        
        
    }
    else
        
    {
        $html= file_get_contents("search.html");
    $html= str_replace("---results---", "", $html);
       $html = str_replace("{{log}}", $lg, $html); 
    
    echo $html;
        
        
    }
     
}
else
{
    
    $html= file_get_contents("search.html");
    $html= str_replace("---results---", "", $html); 
    $html = str_replace("{{log}}", $lg, $html);
    echo $html;
   // echo 'asas';
  
}

//return json data
//echo json_encode($data);
?>