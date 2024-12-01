<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the username from the form
    $username = $_POST['username'];
    
    // Set a cookie to store the username for 1 hour (3600 seconds)
    setcookie('username', $username, time() + 3600);
    
    // Reload the page to apply the cookie changes
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Retrieve the username from the cookie, or set it to an empty string if not set
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

<h1>Login Form</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
    <br><br>
    <input type="submit" name="submit" value="Login">
</form>

</body>
</html>
