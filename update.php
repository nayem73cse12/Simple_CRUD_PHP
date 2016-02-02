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
$id = $_POST["id"];
$name = $_POST["name"];
$reg = $_POST["reg"];
$cgpa = $_POST["cgpa"];

    $sql = "UPDATE student SET student_name = '$name', reg_no='$reg', cgpa='$cgpa' WHERE student_id='$id' ";

    if ($conn->query($sql) === TRUE) {
        echo "Your Data has been updated Succesfully";
       header('Location: index.php');
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        $message = "Something went wrong . query failed";
        echo $message;
        //header('Location: index.php?meg='.$message);
    }
    $conn->close();

 ?>