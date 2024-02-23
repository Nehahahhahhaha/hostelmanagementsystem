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

$name = $_REQUEST['name'];
$dob = $_REQUEST['dob'];
$pname = $_REQUEST['pname'];
$num = $_REQUEST['num'];
$date = $_REQUEST['date'];

$sql=  "INSERT INTO info VALUES('$name', '$dob','$pname','$num',' $date')";

if(mysqli_query($conn,$sql)){
    echo "Data added Sucssfully";
    echo "<br>";
    echo "<button onclick=\"document.location='hostel.php'\"> Go Back </button>";
}
else{
    echo "data not added";
}
mysqli_close($conn);

?>
</body>
</html>
