<?php
require ('dbms.php');
session_start();

$lg = '';
if(!isset($_SESSION['user_id'])){
    $lg = ' <li class="menu-item"><a href="log_option.html">login</a> ';
}
else $lg = ' <li class="menu-item"><a href="logout.php">logout</a> ';

$html = file_get_contents("movie.html"); 
$html = str_replace("{{log}}", $lg, $html);
echo $html;
$conn->close();
?>