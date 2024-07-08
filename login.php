<?php
// Include header
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="login_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
        <p>New user? <a href="register.php" class="register-link">Register here</a></p>
    </div>
</body>
</html>

<?php
// Include footer
include 'includes/footer.php';
?>
