<?php
// Add product to the cart (cookie)
if (isset($_GET['product'])) {
    $product = $_GET['product'];

    // Check if a cart cookie already exists
    if (!isset($_COOKIE['cart'])) {
        $cart = array($product); // Create a new cart with the first product
    } else {
        // Decode existing cart from JSON
        $cart = json_decode($_COOKIE['cart'], true);
        $cart[] = $product; // Add new product to the cart
    }

    // Debugging: Display the cart before saving
    echo '<pre>';
    print_r($cart);
    echo '</pre>';

    // Save the updated cart in a cookie (expires in 7 days)
    setcookie('cart', json_encode($cart), time() + (86400 * 7), "/");
    header("Location: products.php"); // Redirect to avoid form resubmission
    exit(); // Add exit to prevent further execution after redirection
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products Page</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <li>Product 1 <a href="products.php?product=Product 1">Add to Cart</a></li>
        <li>Product 2 <a href="products.php?product=Product 2">Add to Cart</a></li>
        <li>Product 3 <a href="products.php?product=Product 3">Add to Cart</a></li>
    </ul>

    <a href="cart.php">View Cart</a>
</body>
</html>
