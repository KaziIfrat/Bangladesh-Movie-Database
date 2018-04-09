<?php

require ('dbms.php');
session_start();
$lg = '';
if(!isset($_SESSION['user_id'])){
    $lg = ' <li class="menu-item"><a href="log_option.html">login</a> ';
}
else $lg = ' <li class="menu-item"><a href="logout.php">logout</a> ';
if ($_POST) {
    $movie_id = mysqli_real_escape_string($conn, $_POST['movie_id']);
    $user_id = $_SESSION['user_id'];
    if(!$_SESSION['user_id']) header("location: log_option.html");
    
    $review = mysqli_real_escape_string($conn, $_POST['review']);
    $date = date("F j, Y");
    $title = mysqli_real_escape_string($conn, $_POST['title']);

    $sql2 = "SELECT * from review WHERE movie_id=" . $movie_id . " && user_id=" . $user_id;
    $result_prev_rev = $conn->query($sql2);

    $query="";
    
    if ($result_prev_rev->num_rows > 0) {
        $query = 'UPDATE review SET title="'.$title.'", date="'.$date.'", review_text="'.$review.'" '
                . 'WHERE movie_id='.$movie_id.' && user_id='.$user_id;
    
    } else {
        $query = 'INSERT INTO review(movie_id, user_id, title, date, review_text)'
                . 'VALUES ("' . $movie_id . '", "' . $user_id . '", "' . $title . '", "' . $date . '", "' . $review . '" )';
    }

    if ($conn->query($query)) {
        header("Location: single.php?id=" . $movie_id);
        die();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    $movie_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    if(!isset($_SESSION['user_id'])) header("location: log_option.html");

    if ($movie_id) {

        $sql = "SELECT movie_name FROM `movie_details` WHERE movie_id = " . $movie_id;
        $sql2 = "SELECT * from review WHERE movie_id=" . $movie_id . " && user_id=" . $user_id;

        $result = $conn->query($sql);
        $result_prev_rev = $conn->query($sql2);

        if ($result->num_rows > 0) {

            $prev_title = "";
            $prev_review = "";
            if ($result_prev_rev->num_rows > 0) {
                $prv_row = $result_prev_rev->fetch_assoc();
                $prev_title = $prv_row['title'];
                $prev_title = str_replace("\"", "&#34;", $prev_title);
                $prev_review = $prv_row['review_text'];
                $prev_review = str_replace("\"", "&#34;", $prev_review);
            }

            $row = $result->fetch_assoc();
            $title = $row['movie_name'];

            $html = file_get_contents("review.html");

            $html = str_replace("{{movie_name}}", $title, $html);
            $html = str_replace("{{movie_id}}", $movie_id, $html);

            $html = str_replace("{{prv_title}}", $prev_title, $html);
            $html = str_replace("{{prv_review}}", $prev_review, $html);
            $html = str_replace("{{log}}", $lg, $html);
            $html = preg_replace('/<!--.*?-->/s', '', $html);

            echo $html;
        }
    }
}
$conn->close();
?>