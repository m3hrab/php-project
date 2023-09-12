<?php
include 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $clinic_address = $_POST['clinic_address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $specialist = $_POST['specialist'];

    // Handle image upload
    $image_path = '';
    if ($_FILES['image']['size'] > 0) {
        $upload_dir = 'uploads/';
        $image_name = $_FILES['image']['name'];
        $image_path = $upload_dir . $image_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
            echo "Image uploaded successfully!<br>";
        } else {
            echo "Image upload failed.<br>";
            echo $image_path;
        }
    }

    $sql = "INSERT INTO doctor_list (name, clinic_address, email, contact, specialist, image_path)
            VALUES ('$name', '$clinic_address', '$email', '$contact', '$specialist', '$image_path')";

    if (mysqli_query($con, $sql)) {
        header('location: doctors.php'); 
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
