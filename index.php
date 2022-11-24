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
    echo "<table >";
    $a=1;
    while($a<=10)
    {
       echo "<tr>$a<td></td><td></td></tr><br>";
       echo ++$a;
    }
    echo "</table>"
    
?>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<?php
$t = date("H");

if ($t < "15") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

</body>
</html>