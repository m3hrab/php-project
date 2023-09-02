<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid mt-5">
    <h2 class="text-center">Edit User</h2>
    <form action="edit_user.php" method="post">
        <input type="hidden" name="ID" value="<?= $user['ID'] ?>">
        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname" value="<?= $user['firstname'] ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="middlename" value="<?= $user['middlename'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname" value="<?= $user['lastname'] ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?= $user['gender'] === 'male' ? 'checked' : '' ?> required>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?= $user['gender'] === 'female' ? 'checked' : '' ?> required>
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="other" value="other" <?= $user['gender'] === 'other' ? 'checked' : '' ?> required>
                <label class="form-check-label" for="other">Other</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" name="date" value="<?= $user['date'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nationality</label>
            <select class="form-select" name="nationality">
                <option value="">Select Nationality</option>
                <option value="Bangladesh" <?= $user['nationality'] === 'Bangladesh' ? 'selected' : '' ?>>Bangladesh</option>
                <option value="India" <?= $user['nationality'] === 'India' ? 'selected' : '' ?>>India</option>
                <option value="Pakistan" <?= $user['nationality'] === 'Pakistan' ? 'selected' : '' ?>>Pakistan</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" required>
        </div>
        
        <!-- Add more input fields as needed -->
        
        <button type="submit" class="btn btn-primary" name="update">Update User</button>
        <a href="crud_users.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
