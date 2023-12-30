<?php

session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item = $_POST['item'];
    $price = $_POST['price'];

    // Include the function file and call the addToCart function
    include 'functions.php';
    addToCart($item, $price);
}

// Include the functions file
include 'functions.php';

// Display the shopping cart
viewCart();
