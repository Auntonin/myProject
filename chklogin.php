<?php
session_start();
require_once "conn.php";
$uname=$_POST['usernames'];
$upasswd=$_POST['passwords'];
$_SESSION['login_name']="";

$sql="SELECT * FROM user WHERE user_name='".$uname."' AND user_password='".$upasswd."'";
$result=$conn->query($sql);
if($result->num_rows == 1)
{
    $rs=$result->fetch_array();
    $_SESSION['user_id']=(int)$rs['user_id'];
    $_SESSION['tail']=1.234;
    $_SESSION['login_name']=$rs['user_name'];
    $_SESSION['full_name']=$rs['user_firstname']." ".$rs['user_lastname'];
    header("location: index.php");
}
else
{
    echo "No!";
    header("location: login.php");
}
?>