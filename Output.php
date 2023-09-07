<?php
 $host = "localhost";  // Your MySQL server host
 $username = "root";   // MySQL username (default for XAMPP)
 $password = "";       // MySQL password (default for XAMPP)
 $database = "UniversityDatabase"; // Replace with your database name

 $conn = new mysqli($host, $username, $password, $database);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }


// Initialize variables
$table = "";
$columns = array();
$result = null;

// Check if a button was pressed
if (isset($_GET['table'])) {
    $table = $_GET['table'];
    $query = "SELECT * FROM $table"; // Adjust this query as per your database schema

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Get the table's column names
    $result_columns = mysqli_query($conn, "SHOW COLUMNS FROM $table");

    if ($result_columns) {
        while ($row = mysqli_fetch_assoc($result_columns)) {
            $columns[] = $row['Field'];
        }
    }
} elseif (isset($_GET['query']) && $_GET['query'] == 'query1') {
    // Display students with program 'btech'
    $table = "students";
    $query = "SELECT * FROM `students` WHERE `program` = 'btech'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Get the table's column names
    $result_columns = mysqli_query($conn, "SHOW COLUMNS FROM $table");

    if ($result_columns) {
        while ($row = mysqli_fetch_assoc($result_columns)) {
            $columns[] = $row['Field'];
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Display</title>
    <style>
        /* Center the navbar */
        div {
            text-align: center;
        }

        /* Style the navbar links */
        div a {
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
        }

        /* Style the active link */
        div a:hover {
            background-color: #555;
        }

        /* Center everything on the page */
        body {
            text-align: center;
            background-color: #f0f0f0; /* Background color for the page */
            padding: 20px;
        }

        /* Style the table */
        table {
            margin: 0 auto; /* Center the table horizontally */
            border-collapse: collapse;
            width: 80%; /* Adjust the table width as needed */
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <!-- Navbar with buttons to select different tables -->
    <div>
    <a href="/Assignment1/index.php">Home</a>

        <a href="output.php?table=students">Student</a>
        <a href="output.php?table=advisors">Advisor</a>
        <a href="output.php?table=departments">Department</a>
        <a href="output.php?table=instructors">Instructor</a>
        <!-- Add more links for other tables as needed -->
    </div>

    <?php
    // Check if a table was selected
    if (!empty($table)) {
    ?>
    <!-- Display the selected table's data -->
    <h2>Data from Table: <?php echo $table; ?></h2>
    <table>
        <thead>
            <tr>
                <?php
                foreach ($columns as $column) {
                    echo "<th>$column</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($columns as $column) {
                    echo "<td>" . $row[$column] . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
    } else {
        // Display a default message when no link is pressed
        echo "<p>Please select a table from the navigation above.</p>";
    }
    ?>
</body>
</html>

<?php
mysqli_close($conn);
?>