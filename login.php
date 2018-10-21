<?php
include('config.php');
session_start();

if($_SERVER["REQUEST_METHOD"]=='POST'){
  $id = addslashes($_POST['id']);
  $password = addslashes($_POST['password']);

  $sql = "SELECT id FROM membertbl WHERE id='$id' and password='$password'";
  $result = mysql_query($sql);
  $count = mysql_num_rows($result);

  if($count == 1)
  {
    header("location:welcome.php");
  }else{
    $error="님 아이디랑 비번 틀림, 없거나 잘못 입력했거나";
    echo($error);
    echo "<a href=login.html> 뒤로 가기</a>";
  }
}
 ?>
