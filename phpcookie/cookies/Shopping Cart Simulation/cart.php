<?php
// Retrieve cart from cookie
$cart = array();
if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart Page</title>
</head>
<body>
    <h1>Your Shopping Cart</h1>

    <?php if (!empty($cart)): ?>
        <ul>
            <?php foreach ($cart as $item): ?>
                <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>

    <a href="products.php">Back to Products</a>
</body>
</html>
