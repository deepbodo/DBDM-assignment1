<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Form</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-image: url("/Assignment1/CSS/cover.jpg");
        background-size: cover;
      }

      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 40px 20px;

        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }

      .form-container {
        text-align: center;
      }

      .form-icon {
        font-size: 36px;
        color: #3498db;
        margin-bottom: 20px;
      }

      .form-input,
      .form-inputs {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        box-sizing: border-box;
      }

      .form-inputs {
        transition: border-color 0.3s;
      }

      .form-inputs:focus {
        border-color: #3498db;
      }

      .form-button {
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 12px 24px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .form-button:hover {
        background-color: #2980b9;
      }

      .navbar {
        margin-bottom: 40px;
        background-color: #fff;
        border-bottom: 1px solid #ccc;
        padding: 10px 0;
        text-align: center;
        font-size: 24px;
      }

      .navbar .nav-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
      }

      .navbar a {
        color: #000;
        text-decoration: none;
        transition: color 0.3s;
      }

      .navbar a:hover {
        color: #ff5e3a;
      }
    </style>
</head>
<body>
<?php include 'navbar.html'; ?>
<div class="container">
      <div class="form-container">
        <div class="form-icon">
          <i class="bx bx-user"></i>
        </div>
    <h2>Instructor Form</h2>
    <form action="" method="post">
        <label for="deptname">Department Name:</label>
        <input class="form-input" type="text" name="deptname" id="deptname" required><br><br>

        <label for="Instructor Name">Instructor Name:</label>
        <input  class="form-input" type="text" name="name" id="name" required><br><br>

        <label for="Salary">Salary:</label>
        <input class="form-input" type="number" name="salary" id="salary" required><br><br>
      
        <input class="form-button" type="submit" name="submit" value="Submit">
    </form>
    </div>
    </div>
    <?php
    $host = "localhost";  // Your MySQL server host
    $username = "root";   // MySQL username (default for XAMPP)
    $password = "";       // MySQL password (default for XAMPP)
    $database = "UniversityDatabase"; // Replace with your database name

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["submit"])) {
        $deptname = $_POST["deptname"];
        $name = $_POST["name"];
        $salary = $_POST["salary"];

        $sql = "INSERT INTO instructors ( `name`, `deptname`,`salary`) VALUES ('$name', '$deptname', '$salary')";

        if (mysqli_query($conn, $sql)) {
            // Data inserted successfully
            echo '<script>alert("Submitted successfully.");</script>';
        } else {
            // Error occurred
            echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
        }

        // Clear form fields
        echo '<script>
            document.getElementById("deptname").value = "";
            document.getElementById("name").value = "";
            document.getElementById("salary").value = "";
        </script>';
    }

    $conn->close();
    ?>
</body>
</html>

    
        
         