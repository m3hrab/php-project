<?php
require "dbcon.php";
session_start();

// Query to fetch the list of doctors
$sql = "SELECT * FROM doctors_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Clinic Address</th><th>Email</th><th>Contact</th><th>Specialist</th><th>Image</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["clinic_address"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["contact"] . "</td>";
        echo "<td>" . $row["specialist"] . "</td>";
        echo "<td><img src='images/" . $row["image"] . "' width='100'></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No doctors found.";
}

// Close the database connection
$conn->close();
?>

