<?php
// Include header
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Register</h1>
    <form action="register_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>

<?php
// Include footer
include 'includes/footer.php';
?>
