<?php
include 'dbcon.php';

if(isset($_POST['upload'])) {
    $image_name = $_FILES['image']['name'];
    $image_data = file_get_contents($_FILES['image']['tmp_name']);

    $sql = "INSERT INTO images (image_name, image_data) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $image_name, $image_data);

    if($stmt->execute()) {
        echo "Image uploaded and added to the database successfully.";
    } else {
        echo "Error uploading image: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
