<?php
// Example user data (in a real application, you should retrieve this data from a database)
$users = [
    ['username' => 'testuser', 'password' => 'password123'],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            echo 'Login successful!';
            // Here you can start a session and redirect to a protected page
            exit;
        }
    }
    echo 'Invalid username or password.';
}
?>
