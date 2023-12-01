<DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php
require 'header.html'; // Include the header

// Generic body content
?>

<body id="cart">
<div id="content">
    <h1>Cart</h1>
    <div class="cart">
        
        <p>Your current cart:</p>

        <div class="scrollable-container" id="scroll_container">
            <script>
                var element = document.getElementById("scroll_container");
                var storedImages = JSON.parse(sessionStorage.getItem("images")) || [];
                for(var image of storedImages) {
                    element.innerHTML += ' <div class="imageContainer"> <img class="albumCover" src="' + image + '" width="25%" alt="Image"> </div> '
                }
            </script>
        </div>
        

        <div class="cart" id="cart_feedback">
            <form action="processorder.php" method="post">
                <p><strong>Your name:</strong><br/>
                <input type="text" name="name" size="40" /></p>
                
                <p><strong>Your email address:</strong><br/>
                <input type="text" name="email" size="40" /></p>
                
                <p><strong>Your feedback:</strong><br/>
                <textarea name="feedback" rows="8" cols="40">
                </textarea></p>
                
                <p><input type="submit" value="Send Order" /></p>  
            </form>
        </div>
    </div>
</div>
</body>
</html>