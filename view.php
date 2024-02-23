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
$host='localhost';
$username='root';
$password="";
$dbname="details";
$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn){
    die("couldn't connect to the database".mysql_error());
}
$sql="SELECT Name,DOB,`Parent's Name`,Contact, `Date of Enrollment` FROM info ";
$result= $conn->query($sql);
if($result->num_rows>0){
    echo "<table border='1'>;
    <tr>
    <th>Name</th>
    <th>  DOB</th>
    <th>  Parent's Name</th>
    <th>  Contact</th>
    <th>  Date Of Enrollment</th>
</tr>";
    while($row = $result->fetch_assoc()){
        echo "
       
        <tr>
        <td>{$row['Name']}</td>
        <td>  {$row['DOB']}</td>
        <td>  {$row['Parent\'s Name']}</td>
        <td>  {$row['Contact']}</td>
        <td>  {$row['Date of Enrollment']}</td>
      </tr>";
    }
    echo "<br>";
    echo "<button onclick=\"document.location='hostel.php'\"> Go Back </button>";
}
else{
    echo "0 results";
    echo "<br>";
    echo "<button onclick=\"document.location='hostel.php'\"> Go Back </button>";
}
$conn->close();
?>