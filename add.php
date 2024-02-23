<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management</title>
    <link rel="stylesheet" href="add.css">

</head>
<body>
<h1><marquee scrollamount="20"> Add New Student To The Database </marquee></h1>

<br><br><br><br><br><br><br><br>
<form action="insert.php" method="post" class="container">
<label>Name of The Student</label>
<input type="text" name="name"><br>
<label>Date Of Birth</label>
<input type="text" name="dob"><br>
<label>Parent's Name</label>
<input type="text" name="pname"><br>
<label>Contact No.</label>
<input type="text" name="num"><br>
<label>Enrollment Date</label>
<input type="text" name="date"><br>
<input type="Submit" value="Submit">
</form>

</body>
</html>