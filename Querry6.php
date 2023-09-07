<?php
$host = "localhost";  // Your MySQL server host
$username = "root";   // MySQL username (default for XAMPP)
$password = "";       // MySQL password (default for XAMPP)
$database = "UniversityDatabase"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM instructors LEFT JOIN teaches ON instructors.instructorId=teaches.ID";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Get column names dynamically
$columns = array();
while ($fieldInfo = mysqli_fetch_field($result)) {
    $columns[] = $fieldInfo->name;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Instructors and Teaches Left Join</title>
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
    <h1>Instructors and Teaches Left Join</h1>
    <table class="styled-table">
        <tr>
            <?php foreach ($columns as $column): ?>
                <th><?php echo $column; ?></th>
            <?php endforeach; ?>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <?php foreach ($columns as $column): ?>
                    <td><?php echo $row[$column]; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
mysqli_close($conn);
?>