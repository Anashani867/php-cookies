<?php
// Set the initial cookie
setcookie("user_preference", "dark_mode", time() + 3600, "/");

// Display the current cookie value
if (isset($_COOKIE['user_preference'])) {
    echo "The current cookie value is: " . $_COOKIE['user_preference'] . "<br>";
}

// Update the cookie when the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update the cookie value to a new value
    setcookie("user_preference", "light_mode", time() + 3600, "/");

    // Reload the page to prevent form resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Cookie in PHP</title>
</head>
<body>

<form method="POST">
    <input type="submit" value="Update cookie to light mode" />
</form>

</body>
</html>
