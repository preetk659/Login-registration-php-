<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    
    foreach ($users as $user) {
        list($u, $p) = explode("|", $user);
        if ($username == $u && $password == $p) {
            echo "Login successful! Welcome, $username.";
            exit;
        }
    }

    echo "Invalid credentials!";
}
?>

<form method="POST">
    <h2>Login</h2>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>
