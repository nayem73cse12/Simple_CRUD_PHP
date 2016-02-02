<!DOCTYPE html>
<html>
<head>
	<title>Display Student Info</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
      <legend><h2>Student Info Display</h2></legend>
     <div class="container">
     <a href="Student_Entry.php"><button type="button" class="btn btn-success btn-xs">ADD NEW</button></a>
<br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

?>

  <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Reg no</th>
          <th>CGPA</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
      <br>
      	<?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {


                echo  '<tr>
                      <td>'.$row["student_name"].'</td>
                      <td>'.$row["reg_no"] .'</td>
                      <td>'.$row["cgpa"] .'</td>
                      <td><a href="edit.php?id='.$row['student_id'].'"><button type="button" class="btn btn-success btn-xs">Edit</button></a>
                      <a href="delete.php?id='.$row['student_id'].'"><button type="button" class="btn btn-danger btn-xs">Delete</button></a></td>
                      </tr>';
            }
        } else {
            echo "0 results";
        }
      $conn->close();
?>

      </tbody>


</table>
</div>
</div>
</body>
</html>