<?php
include 'dbcon.php';

// Extract data from the AJAX request
$doctorId = $_POST['doctorId'];
$userId = $_POST['userId'];
$timeSlot = $_POST['timeSlot'];

// Insert the appointment data into the appointment table
$insertQuery = "INSERT INTO appointment (doctor_id, user_id, time_slot) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($con, $insertQuery);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "iis", $doctorId, $userId, $timeSlot);
    if (mysqli_stmt_execute($stmt)) {
        // Appointment successfully added
        echo "Appointment added successfully.";
    } else {
        // Error handling if the insertion fails
        echo "Error: " . mysqli_error($con);
    }
    mysqli_stmt_close($stmt);
} else {
    // Error handling if the statement preparation fails
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
