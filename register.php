<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $data = "$username|$password\n"; // Save as plain text (for demo only)
    file_put_contents("users.txt", $data, FILE_APPEND);
    
    echo "Registration successful! <a href='login.php'>Login here</a>";
    exit;
}
?>

<form method="POST">
    <h2>Register</h2>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Register</button>
</form>
