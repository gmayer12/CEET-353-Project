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
    <p>Show current cart. Have purchase options</p>

    <p>Please tell us what you think.</p>

    <form action="processorder.php" method="post">
    <p><strong>Your name:</strong><br/>
    <input type="text" name="name" size="40" /></p>
     
    <p><strong>Your email address:</strong><br/>
    <input type="text" name="email" size="40" /></p>
     
    <p><strong>Your feedback:</strong><br/>
    <textarea name="feedback" rows="8" cols="40">
    </textarea></p>
     
    <p><input type="submit" value="Send Feedback" /></p>  
    </form>
</div>
</body>
</html>
