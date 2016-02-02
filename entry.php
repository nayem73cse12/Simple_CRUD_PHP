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

$name = $_POST["name"];
$reg = $_POST["reg"];
$cgpa = $_POST["cgpa"];

 $sql = "INSERT INTO student (student_name, reg_no, cgpa)
         VALUES ('$name', '$reg', '$cgpa')";

         if ($conn->query($sql) === TRUE) {
               // echo "Data added Succesfully";
               header('Location: index.php');
             }  else {
                   //echo "Error: " . $sql . "<br>" . $conn->error;
                   $message = "Something went wrong.  sql  error";
                   //header('Location: index.php?meg='.$message);
            }

           $conn->close();

 ?>