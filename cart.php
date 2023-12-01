<head>
        <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<?php
require 'header.html'; // Include the header

// Generic body content
?>

<body id="cart">
<div id="content">
    <div class="cart">
    <h1>Cart</h1>
    <p>Your current cart:</p>

    <div class="thumbnailContainer">
        <?php 

        // Loop through the array and display images
        $imageArray = ['images/album_Jackson 4-22-23/1.JPG', 'images/album_Jackson 6-24-23/2.JPG'];
        foreach ($imageArray as $imageName) {
            echo '<div class="image-item">';
            echo '<img class="albumCover" src="' . $imageName . '" width="25%" alt="Image"></span>';
            echo '</div>';
        }
        ?>
</div>
    <div class="cart">
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
</body>
</html>
