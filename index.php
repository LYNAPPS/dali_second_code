<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>

<body>

    <h2>Welcome to the Online Store</h2>

    <form action="cart.php" method="post">
        <label for="item">Product:</label>
        <input type="text" id="item" name="item" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>

        <button type="submit">Add to Cart</button>
    </form>

    <h3>Your Shopping Cart</h3>
    <?php include 'cart.php'; ?>

</body>

</html>