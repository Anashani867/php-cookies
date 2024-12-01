<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Set a secure and HTTP-only cookie
    setcookie("secure_cookie", "thisIsASecureValue", time() + 3600, "/", "", true, true); // secure=true, httponly=true

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Cookie Example</title>
</head>
<body>

<form method="POST">
    <input type="submit" value="Set Secure Cookie" />
</form>

<?php
// Check if the secure cookie is set
if (isset($_COOKIE['secure_cookie'])) {
    echo "<p>Secure cookie value: {$_COOKIE['secure_cookie']}</p>";
} else {
    echo "<p>Secure cookie not set yet.</p>";
}
?>

<!-- JavaScript part to try accessing the cookie -->
<script>
    if (document.cookie.includes('secure_cookie')) {
        document.write("JavaScript was able to access the secure cookie.");
    } else {
        document.write("JavaScript cannot access the secure cookie (HTTP-only).");
    }
</script>

</body>
</html>
