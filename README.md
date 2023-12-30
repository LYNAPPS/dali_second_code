#Simple PHP Shopping Cart
A basic shopping cart implementation using PHP sessions. Users can add, view, and remove items from their shopping cart.

Table of Contents
Features
Usage
Files
How it Works
Installation
Dependencies
Contributing
License
Features
Add to Cart:

Users can add items to their shopping cart by entering the product name and price in the provided form.
View Cart:

The shopping cart displays the added items along with their prices.
Users can view the total cost of items in their cart.
Remove from Cart:

Users can remove items from their cart by clicking the "Remove" link next to each item.
Usage
Clone the repository to your local machine:

bash
Copy code
git clone https://github.com/LYNAPPS/dali_second_code.git
Ensure that PHP is installed on your server or local environment.

Open index.php in a web browser to access the shopping cart.

Use the provided form to add items to your cart.

View your shopping cart to see the added items and total cost.

To remove an item, click the "Remove" link next to the item in your cart.

Files
index.php: HTML form for adding items to the cart and displaying the cart.
functions.php: PHP file containing functions for cart manipulation.
How it Works
The user inputs a product name and price in the form and submits it.

The PHP script (functions.php) handles the addition of items to the cart using the addToCart() function.

Users can view their cart with the viewCart() function, which displays the added items and total cost.

To remove an item, users click the "Remove" link next to the item, triggering the removeFromCart() function.

The removeFromCart() function uses array_filter() to create a new cart without the item to remove.

Installation
Clone the repository:

bash
Copy code
git clone https://github.com/LYNAPPS/dali_second_code.git
Ensure PHP is installed on your server or local environment.

Open index.php in a web browser.

Dependencies
None
Contributing
Feel free to contribute by opening issues or submitting pull requests. 