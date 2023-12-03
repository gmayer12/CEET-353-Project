<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="scripts.js"></script>
</head>
<?php
require 'header.html'; // Include the header

// Generic body content
?>

<body id="cart">
<div id="content">
    <h1>Cart</h1>        
    <div id="subtotal">
        <script>document.getElementById("subtotal").innerHTML = "<h2>Subtotal = $" + (getPrice() * getNumberItemsInCart()) + "</h2>"</script>
    </div>
    <div class="scrollable-container" id="scroll_container">
        <?php
            if(isset($_COOKIE['cartItems'])) {
                try {
                    // Get the cookie
                    $cookieValue = $_COOKIE['cartItems'];
                                        
                    // Read the cookie into an array
                    $myArray = json_decode($cookieValue, true);

                    foreach($myArray as $image) {
                        echo ' <div class="imageContainer"> <img class="albumCover" src="' . $image . '" width="25%" alt="Image" onclick="removeFromCart(\'' . $image . '\')"> </div> ';
                    }
                }
                catch(error) {
                    echo "Error while loading cart";
                }
                    
            }
            else {
                //echo "Cart is empty";
            }
                
                
        ?>
    </div>
    <br>
    <div class="pageButton" onclick="clearCart()">
        <span class="pageButtonText">Clear Cart</span>
    </div> 
    <br>
    <div class="pageButton" onclick="window.location.href='checkout.php'">
        <span class="pageButtonText">Checkout</span>
    </div>
</div>
</body>
</html>