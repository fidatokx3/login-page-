<?php
session_start();
require_once('config.php') ;
$user_check = $_SESSION['login_user'];
$connection = $link ;
$ses_sql = mysqli_query($connection,"SELECT `user` FROM login_system WHERE `user` = '{$user_check}' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['user'];
if(!isset($_SESSION['login_user'])){
  header("location:index.php");
}
?>
