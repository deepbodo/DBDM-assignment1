<?php
$host = "localhost";  // Your MySQL server host
$username = "root";   // MySQL username (default for XAMPP)
$password = "";       // MySQL password (default for XAMPP)
$database = "UniversityDatabase"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT DISTINCT c.course_id, c.course_name
          FROM courses c
          WHERE c.course_id IN (
              SELECT t.course_id
              FROM teaches t
              WHERE (t.semester = 'Summer' AND t.year = 2019)
                 OR (t.semester = 'Spring' AND t.year = 2020)
          )";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Query Courses</title>
    <style>
        /* Style the table */
        .styled-table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }

        .styled-table th, .styled-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .styled-table th {
            background-color: #f2f2f2;
        }

        .styled-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Courses Taught in Summer 2019 or Spring 2020</h1>
    <table class="styled-table">
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['course_id'] . "</td>";
            echo "<td>" . $row['course_name'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
mysqli_close($conn);
?>