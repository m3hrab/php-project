<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor List</title>
    <style>
        .doctor-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin:20px 100px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .doctor-image {
            max-width: 300px;
            max-height: 300px;
            margin-right: 10px;
        }

        .doctor-info {
            flex-grow: 1;
            margin-right: 10px;
        }

        .appointment-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    include 'dbcon.php';

    $sql = "SELECT * FROM doctor_list";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='doctor-container'>";
            if (!empty($row['image_path'])) {
                echo "<img class='doctor-image' src='" . $row['image_path'] . "' alt='Doctor Image'>";
            }
            echo "<div class='doctor-info'>";
            echo "<strong>Name:</strong> " . $row['name'] . "<br>";
            echo "<strong>Specialist:</strong> " . $row['specialist'] . "<br>";
            echo "<strong>Clinic Address:</strong> " . $row['clinic_address'] . "<br>";
            echo "</div>";
            echo "<button class='appointment-button'>Make an Appointment</button>";
            echo "</div>";
        }
    } else {
        echo "No doctors found.";
    }

    mysqli_close($con);
    ?>
</body>
</html>
