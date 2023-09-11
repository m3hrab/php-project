<?php
require 'dbcon.php'; // Include the database connection file

// Retrieve data from the database
$sql = "SELECT * FROM doctors_list";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor List</title>
    <!-- Include CSS for styling -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Doctor List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Clinic Address</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Specialist</th>
                <th>Image</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['clinic_address'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['specialist'] . "</td>";
                echo '<td><img src="uploads/' . $row['image'] . '" alt="Doctor Image" width="100"></td>';
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
