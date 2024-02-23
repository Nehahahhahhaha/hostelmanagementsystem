<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host='localhost';
$username='root';
$password="";
$dbname="details";
$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn){
    die("couldn't connect to the database".mysql_error());
}

?>

</body>
</html>