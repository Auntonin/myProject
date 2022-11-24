<?php
session_start();
require_once "conn.php";

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
    <?php
    if(isset($_SESSION['full_name']))
    {
        echo "สวัสดีคุณ".$_SESSION['full_name']." ---  ".'<a href="logout.php">Logout</a> | <a href="add.php">Add</a><br><br>';;
    }
    else{
        echo "<a href='login.php'>เข้าสู่ระบบ</a><br><br>";
    }
    ?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>password</td>
            <td>Firstname</td>
            <td>Lastname</td>
        </tr>
        <?php
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) 
  {
    ?>
        <tr>
            <td><?=$row['user_id']?></td>
            <td><?=$row['user_name']?></td>
            <td><?=$row['user_password']?></td>
            <td><?=$row['user_firstname']?></td>
            <td><?=$row['user_lastname']?></td>
        </tr>
    <?php
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
    </table>
</body>
</html>
