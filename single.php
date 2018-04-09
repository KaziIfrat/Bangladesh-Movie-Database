<?php
require ('dbms.php');
session_start();
if(!isset($_GET['id'])){
    echo 'no result';
}else {
$movie_id = $_GET['id'];

$sql="SELECT * FROM `movie_details` WHERE movie_id = " .$movie_id;
$sql_rev="SELECT * FROM `review` WHERE movie_id = " .$movie_id;
$sql_sn="SELECT * FROM `songs` WHERE movie_id = " .$movie_id;


$result=$conn->query($sql);
$result_rev=$conn->query($sql_rev);
$result_sn=$conn->query($sql_sn);

$lg = '';
if(!isset($_SESSION['user_id'])){
    $lg = ' <li class="menu-item"><a href="log_option.html">login</a> ';
}
else $lg = ' <li class="menu-item"><a href="logout.php">logout</a> ';

if($result->num_rows>0){
    $row = $result->fetch_assoc();
    $title = $row['movie_name'];
    $img = $row['image'];
    $summary = $row['summary'];
   // $rating = $row['rating'];
   // $rating_title = $rating . ' out of 5.00';
    //$rating_pc = $rating*20;
    $length = $row['length'];
    $premiere = $row['premiere'];
    $category = $row['catagory'];
    $directors = $row['directors'];
    $writers = $row['writers'];
    $stars = $row['stars'];
    
    $html = file_get_contents("single.html"); 
    $html = str_replace("{{title}}", $title, $html);
    $html = str_replace("{{img}}", $img, $html);
    $html = str_replace("{{summary}}", $summary, $html);
   // $html = str_replace("{{rating}}", $rating, $html);
    //$html = str_replace("{{rating_title}}", $rating_title, $html);
    //$html = str_replace("{{rating_pc}}", $rating_pc, $html);
    $html = str_replace("{{length}}", $length , $html);
    $html = str_replace("{{premiere}}", $premiere, $html);
    $html = str_replace("{{category}}",  $category, $html);
    $html = str_replace("{{directors}}", $directors, $html);
    $html = str_replace("{{writers}}", $writers, $html);
    $html = str_replace("{{stars}}", $stars, $html);
    $html = str_replace("{{movie_id}}", $movie_id, $html);
    
    $all_reviews = '';
    $ite = 0;
    while($rev_row = $result_rev->fetch_assoc()){
        $u_id = $rev_row['user_id'];
        $name_query = $conn->query('SELECT user_name FROM user WHERE user_id = '.$u_id);
        $name_row = $name_query->fetch_assoc();
        $u_name = $name_row['user_name'];
        
        if($ite != 0)$all_reviews = $all_reviews . '<hr noshade="1" size="1" width="50%" align="left">';
        $all_reviews = $all_reviews . '<br>';
        $all_reviews = $all_reviews . '<strong>'.$rev_row['title'].'</strong><br>';
        $all_reviews = $all_reviews . $rev_row['date'] . ' | by ' . $u_name . '<br><br>';
        $rev_text = $rev_row['review_text'].'<br><br>';
        $rev_text = str_replace("\n", "<br>", $rev_text);
        $all_reviews = $all_reviews . $rev_text;
        
        $ite = $ite + 1;
    }
    $shtml='<ol>';
    while($sn_row = $result_sn->fetch_assoc())
    {
        $sname=$sn_row['song_name'];
        $slink=$sn_row['song_link'];
        $sdlink=$sn_row['download_link'];
        $shtml .='<li>' . $sname .'<br>' . '<a href="'.$slink . '"> Watch </a> '. '<a href="'.$sdlink . '"> Download </a> </li> ';
        
        
    }
    $shtml .= '</ol>';
    
    $html = str_replace('{{n}}',$shtml, $html);
    
    $html = str_replace("{{all_reviews}}", $all_reviews, $html);
    $html = str_replace("{{log}}", $lg, $html);
    
    $html = preg_replace('/<!--.*?-->/s', '', $html);
    
    echo $html;
}else {
    echo 'No result';
}
}
$conn->close();
?>