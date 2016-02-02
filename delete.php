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
$sql = "DELETE FROM student where student_id='$id'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: index.php');
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>