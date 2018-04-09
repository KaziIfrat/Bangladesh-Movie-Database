<?php
require ('dbms.php');

$movie_id = $_GET['id'];
//echo $movie_id;



if(isset($_POST['update']))
{
    //echo $movie_id;
    $Movie_name1=$_POST['movie_name'];
    $Length1=$_POST['length'];
    $img=$_POST['image'];
    $Summary1=$_POST['summary'];
    $Summary1=str_replace("'", "&#39",$Summary1);
    $Premiere1=$_POST['premiere'];
    $Directors1=$_POST['directors'];
    $Writers1=$_POST['writers'];
    $Stars1=$_POST['stars'];


    $sql="UPDATE `movie_details` SET `movie_name`='$Movie_name1',`summary`='$Summary1',`length`='$Length1',`premiere`='$Premiere1',`directors`='$Directors1', `writers`='$Writers1', `stars`='$Stars1' WHERE movie_id='$movie_id'";
    //echo $sql;
    $ret = mysqli_query($conn,$sql);
    if($img){
        $sql1="UPDATE `movie_details` SET image='dummy/'.'$img' WHERE movie_id='$movie_id'";
        $ret = mysqli_query($conn,$sql1);
    }

}
$sql="SELECT * FROM `movie_details` WHERE movie_id = " .$movie_id;

$result=$conn->query($sql);

if($result->num_rows>0){
    $row = $result->fetch_assoc();
    $title = $row['movie_name'];
    $img = $row['image'];
    $summary = $row['summary'];
    $length = $row['length'];
    $premiere = $row['premiere'];
    $category = $row['catagory'];
    $directors = $row['directors'];
    $writers = $row['writers'];
    $stars = $row['stars'];
    
    $html = file_get_contents("update_movie.html"); 
    $html = str_replace("{{title}}", $title, $html);
    $html = str_replace("{{img}}", $img, $html);
    $html = str_replace("{{summary}}", $summary, $html);
    $html = str_replace("{{length}}", $length , $html);
    $html = str_replace("{{premiere}}", $premiere, $html);
    $html = str_replace("{{category}}",  $category, $html);
    $html = str_replace("{{directors}}", $directors, $html);
    $html = str_replace("{{writers}}", $writers, $html);
    $html = str_replace("{{stars}}", $stars, $html);
    $html = str_replace("{{movie_id}}", $movie_id, $html);
   // echo $title;
    echo $html;
    
}else {
    echo 'No result';
}


//if(isset($_REQUEST['updated'])){
  //  echo '<script>alert("Movie Updated.");';
    //echo 'window.location= "update_movie.php?id='.$movie_id.'";</script>';
//}



//$conn->close();
?>