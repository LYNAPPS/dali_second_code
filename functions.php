<?php

// Check if the function is not already defined
if (!function_exists('addToCart')) {

    // Function to add an item to the cart
    function addToCart($item, $price)
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $_SESSION['cart'][] = ['item' => $item, 'price' => $price];
    }
}

// Check if the function is not already defined
if (!function_exists('removeFromCart')) {

    // Function to remove an item from the cart
    function removeFromCart($itemToRemove)
    {
        if (isset($_SESSION['cart'])) {
            // Use array_filter to create a new cart without the item to remove
            $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($itemToRemove) {
                return $item['item'] !== $itemToRemove;
            });
        }
    }
}

// Check if the function is not already defined
if (!function_exists('viewCart')) {

    // Function to view the items in the cart
    function viewCart()
    {
        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            echo "<ul>";
            foreach ($_SESSION['cart'] as $item) {
                echo "<li>" . $item['item'] . " - $" . $item['price'] . " (<a href='?remove=" . urlencode($item['item']) . "'>Remove</a>)</li>";
            }
            echo "</ul>";
            echo "<p>Total: $" . calculateTotal() . "</p>";
        } else {
            echo "<p>Your shopping cart is empty.</p>";
        }
    }
}

// Check if the function is not already defined
if (!function_exists('calculateTotal')) {

    // Function to calculate the total cost of items in the cart
    function calculateTotal()
    {
        $total = 0;
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                $total += $item['price'];
            }
        }
        return $total;
    }
}

// Check if the 'remove' query parameter is set
if (isset($_GET['remove'])) {
    // Call the removeFromCart function with the item to remove
    removeFromCart($_GET['remove']);
}
