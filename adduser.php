<?php
session_start();
if(isset($_SESSION['full_name']))
{
    require_once "conn.php";
    $uname=$_POST['usernames'];
    $upasswd=$_POST['passwords'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];


    $sql="INSERT INTO user VALUES(0,'$uname','$upasswd','$firstname','$lastname')";
    if($conn->query($sql))
    {
        header("location: index.php");
    }
    else
    {
        echo "No!";
        header("location: add.php");
    }
}
else
{
    header("location: login.php");
}
?>