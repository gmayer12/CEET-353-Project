<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php
        require 'header.html'; // Include the header
        ?>

        <div id="content">
            <h1>Albums</h1>
        </div>

        <?php
            // Get album paths
            $albums = glob("images/album_*");
            $counter = 1;
            foreach($albums as $album) {
                $image = glob($album . "/Thumbnail/*.png"); // You can change the file extension as needed
                echo '<a href="viewAlbum.php?value=' . $album . '"><img class="albumCover" src="' . $image[0] . '" width="25%" alt="Image"></a>';
                if($counter % 3 == 0) {
                    echo "<br>";
                }
                $counter++;
            }
            
        ?>
    </body>
</html>
