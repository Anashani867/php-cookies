<?php
// Check if the form is submitted
if (isset($_POST["chk"])) {
    // Get the form data
    $NewBGColor = $_POST['NewBGColor'];
    $NewTextColor = $_POST['NewTextColor'];
    
    // Set cookies to store colors for 1 hour
    setcookie("BColor", $NewBGColor, time() + 3600);  
    setcookie("TColor", $NewTextColor, time() + 3600);
    
    // Reload the page to apply the cookie changes
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Retrieve cookie values
$Bcolor = isset($_COOKIE['BColor']) ? $_COOKIE['BColor'] : "WHITE";
$TxtColor = isset($_COOKIE['TColor']) ? $_COOKIE['TColor'] : "BLACK";

// Optional print statements for debugging
echo "BG Cookie Color: " . $Bcolor . "<br>";
echo "Text Cookie Color: " . $TxtColor . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body style="background-color: <?php echo $Bcolor; ?>; color: <?php echo $TxtColor; ?>;">

<h1>Welcome to the Color Customization Page</h1>
<p>Select new background and text colors below:</p>

<!-- Form to select new colors -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Select A New BG Color:</label>
    <select name="NewBGColor">
        <option value="WHITE">WHITE</option>
        <option value="BLACK">BLACK</option>
        <option value="RED">RED</option>
        <option value="BLUE">BLUE</option>
    </select>
    <br>
    <label>Select A New Text Color:</label>
    <select name="NewTextColor">
        <option value="WHITE">WHITE</option>
        <option value="BLACK">BLACK</option>
        <option value="RED">RED</option>
        <option value="BLUE">BLUE</option>
    </select>
    <br>
    <input type="hidden" name="chk" value="true"/>
    <input type="submit" value="Submit"/>
</form>

</body>
</html>
