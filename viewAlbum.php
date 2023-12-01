<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
        // Include header
        require 'header.html';

        // Get album name from the previous page
        if (isset($_GET['value'])) {
            $receivedValue = $_GET['value'];
            $albumName = str_replace("album_", "", str_replace("images/", "", $receivedValue));
            // Now you can use $receivedValue in your PHP logic
            echo "<h1>$albumName</h1>";
        } else {
            // Handle the case where the value is not provided
            echo "Album does not exist";
        }
    ?>
    <div class="image">
        <?php
            // Print photos
            $photos = glob("$receivedValue/*.JPG");
            $counter = 1;
            foreach ($photos as $photo) {
                echo '<span class="imageContainer"><img class="albumCover" src="' . $photo . '" width="25%" alt="Image" onclick="addToCart(\'' . $photo . '\')"></span>';

                if ($counter % 3 == 0) {
                    echo "<br>";
                }
                $counter++;
            }
        ?>
    </div>

    <script>
        function addToCart(image) {
            // Retrieve existing session array or create a new one
            var storedImages = JSON.parse(sessionStorage.getItem("images")) || [];

            // Add the new image path to the array
            storedImages.push(image);

            // Store the updated array back to session storage
            sessionStorage.setItem("images", JSON.stringify(storedImages));

            window.alert("Item saved!");
        }
    </script>
</body>
</html>
