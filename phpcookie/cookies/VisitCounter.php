<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Page Access</title>
</head>
<body>
    <?php
    if (!isset($_COOKIE['count'])) {
        echo "Welcome! This is the first time you have viewed this page.";
        $cookie = 1;
    } else {
        $cookie = ++$_COOKIE['count']; // Increment the value of the cookie
        echo "You have viewed this page {$cookie} times.";
    }
    setcookie("count", $cookie, time() + (86400 * 30)); // Set cookie with an expiry time of 30 days
    ?>
</body>
</html>