<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Images</title>
</head>
<body>
    <h2>Images Gallery</h2>

    <?php
    $sql = "SELECT * FROM images";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Display each image as an <img> element
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image_data']) . '"><br>';
        }
    } else {
        echo "No images found.";
    }
    ?>
</body>
</html>
<?php
$con->close();
?>
