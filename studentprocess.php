<?php
$host = "localhost";  // Your MySQL server host
$username = "root";   // MySQL username (default for XAMPP)
$password = "";       // MySQL password (default for XAMPP)
$database = "UniversityDatabase"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $StudentId = $_POST["StudentId"];
    $dob = $_POST["dob"];
    $phone=$_POST["phone"];
    $email = $_POST["email"];
    $major = $_POST["major"];
    $year = $_POST["year"];
    $program=$_POST["program"];
    $dept=$_POST["dept"];
    $totcredit=$_POST["totcredit"];

    $sql = "INSERT INTO students (`ID`, `name`, `dept_name`, `dob`, `email`, `major`, `year`, `totcredit`, `phone`, `program`) VALUES ( '$StudentId','$fullname', '$dept','$dob', '$email', '$major', '$year','$totcredit','$phone','$program')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}
?>