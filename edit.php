<!DOCTYPE html>
<html>
<head>
	<title>Editing a student info</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

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

$id = $_GET["id"];

$sql = "SELECT * FROM student where student_id='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $name = $row["student_name"];
      $reg = $row["reg_no"];
      $cgpa = $row["cgpa"];

    }
  } else {
    echo "0 results";
  }
   $conn->close();

?>

<div class="container">
<div class="col-md-6 col-md-offset-3">
      <legend><h2>Student Info Update</h2></legend>
       
       <form role="form" action="update.php" method="POST">
          			    <div class="form-group">
          			      <label for="name">Name</label>
                      <input name="id" type="hidden" value="<?php  echo $id; ?>">
          			      <input type="text" name="name" value="<?php  echo $name; ?>" class="form-control" required>
          			    </div>

          			    <div class="form-group">
          			      <label for="reg">Reg NO</label>
          			      <input type="text" name="reg" value="<?php echo $reg; ?>" class="form-control" required>
          			    </div>

          			    <div class="form-group">
          			      <label for="cgpa">CGPA</label>
          			      <input type="text" name="cgpa" value="<?php echo $cgpa; ?>" class="form-control" required>
          			    </div>

          			    <button type="submit" class="btn btn-success pull-right">Update</button>

          			  </form>

          			  </div>

</div>
</body>
</html>