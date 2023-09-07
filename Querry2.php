<?php
$host = "localhost";  // Your MySQL server host
$username = "root";   // MySQL username (default for XAMPP)
$password = "";       // MySQL password (default for XAMPP)
$database = "UniversityDatabase"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the "Query" form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fellowship = $_POST['fellowship'];

    $query = "SELECT * FROM students WHERE fellowship = '$fellowship'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    
    // Get column names dynamically
    $columns = array();
    while ($fieldInfo = mysqli_fetch_field($result)) {
        $columns[] = $fieldInfo->name;
    }
    
    // Display the student details in an organized table
    echo "<h2>Student Details of Mtech based on fellowship '$fellowship'</h2>";
    echo "<table border='1'>";
    
    // Display dynamic column headers
    echo "<tr>";
    foreach ($columns as $column) {
        echo "<th>$column</th>";
    }
    echo "</tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // Display dynamic data in rows
        foreach ($columns as $column) {
            echo "<td>" . $row[$column] . "</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Query Students</title>
</head>
<body>
    <h1>Query Students by fellowship amount</h1>
    
    <form method="post" action="">
        <label for="program">Fellowship:</label>
        <input type="text" name="fellowship" id="fellowship" required>
        <input type="submit" value="Query">
    </form>
</body>
</html>

<?php
mysqli_close($conn);
?>