<?php
require "dbcon.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
    <style>
        /* Define the card styles */
        .user-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 300px;
            display: inline-block;
            vertical-align: top;
        }

        /* Define the card title style */
        .user-card h2 {
            margin: 0;
        }

        /* Define the card content style */
        .user-card p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
        <?php // Step 2: Retrieve User Data
    $sql = "SELECT * FROM registration";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach ($users as $user): ?>
        <div class="card">
            <h3><?php echo $user['fullname']; ?></h3>
            <p>Username: <?php echo $user['username']; ?></p>
            <p>Email: <?php echo $user['email']; ?></p>
            <p>Phone Number: <?php echo $user['phoneNumber']; ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>

