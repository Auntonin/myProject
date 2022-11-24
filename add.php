<?php
session_start();
if(isset($_SESSION['full_name']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adduser.php" method="post">
        Username: <input type="text" name="usernames"><br>
        Password: <input type="password" name="passwords"><br>
        firstname: <input type="text" name="firstname"><br>
        lastname: <input type="text" name="lastname"><br>
        <input type="submit" value="OK">
    </form>
</body>
</html>
<?php
}
else
{
    header("location: login.php");
}
?>