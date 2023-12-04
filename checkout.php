<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="scripts.js"></script>
</head>
<?php
require 'header.html'; // Include the header
?>

<body id="checkout">
    <?php
        echo "<h2>Total = $" . json_decode($_COOKIE['subtotal'], true) . "</h2>";
    ?>
    <div class="cart" id="checkout_feedback">
        <form action="processorder.php" method="post">
            <p><strong>Your name:</strong><br/>
            <input type="text" name="name" size="40" /></p>
                
            <p><strong>Your email address:</strong><br/>
            <input type="text" name="email" size="40" /></p>
                
            <p><strong>Order notes:</strong><br/>
            <textarea name="notes" rows="8" cols="40" value=""></textarea></p>
                
            <p><input type="submit" value="Send Order" /></p>  
        </form>
    </div>
</div>
</body>
</html>