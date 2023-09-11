<?php
require 'dbcon.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $clinic_address = $_POST["clinic_address"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $specialist = $_POST["specialist"];
    $image = $_FILES["image"]["name"];
    $image_tmp = $_FILES["image"]["tmp_name"];

    // Upload the image to a directory
    $upload_dir = "uploads/"; 
    move_uploaded_file($image_tmp, $upload_dir . $image);

    // Insert data into the database
    $sql = "INSERT INTO doctors_list (name, clinic_address, email, contact, specialist, image) VALUES ('$name', '$clinic_address', '$email', '$contact', '$specialist', '$image')";
    
    if (mysqli_query($con, $sql)) {
        echo "Doctor registration successful.";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
