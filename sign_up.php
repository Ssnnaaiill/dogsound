<?php

include('config.php');

$id=$_POST['id'];
$pw=$_POST['pwd'];
$pw2=$_POST['pwd2'];

if($pw != $pw2)
{
  echo "비번이 다르군 ";
  echo "<a href=sign_up.html>back page</a>";
  exit();
}

if($id == NULL || $pw == NULL || $pw2 == NULL)
{
  echo "빈칸채워 ";
  echo "<a href=sign_up.html>back page</a>";
  exit();
}

# $mysqli = new mysqli($host, $user, $pw, $dbName);
/*
$check = "select * from member where id = '$id'";
$result = mysql_num_rows($signup);
if($result == 1)
{

}*/

$sql = "INSERT INTO membertbl (id, password) values ('$id', '$pw')";
$signup = mysql_query($sql);
header("location:login.html");

/*
if($signup)
{
  echo 'success inserting';
}
else
{
  echo 'fail to insert sql';
}*/

?>
