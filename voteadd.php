<?php 
include 'koneksi.php';
$id = $_GET['id'];
$earned_vote = $_POST['earned_vote'];
$participant = 1;
mysql_query("UPDATE candidates SET earned_vote = earned_vote + $participant where id = '$id'");
header("Location: http://localhost/election/");
?>