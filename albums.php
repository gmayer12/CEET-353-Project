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
        <div class="thumnail">
        <?php
            // Get album paths
            $albums = glob("images/album_*");
            foreach($albums as $album) {
                $image = glob($album . "/Thumbnail/*.JPG"); // You can change the file extension as needed
                echo '<span class="thumbnailContainer">
                        <a href="viewAlbum.php?value=' . $album . '">
                            <img class="albumCover" src="' . $image[0] . '" width="25%" alt="Image">
                        </a>
                        <h3>' .
                            str_replace("album_", "", str_replace("images/", "", $album)) .
                        '</h3>
                    </span>';
            }
            
        ?>
        </div>
    </body>
</html>
