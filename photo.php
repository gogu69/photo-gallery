<!doctype html>
 
 <html>
 <head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Simple Photo Gallery</title>
 <meta name="language" content="en" /> 
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="photo.css">
  
 </head>
 <body>
  <div class="main">
    <div class="description">
        <h1>Simple Photo Album</h1>
        <p>You can choose the picture to download by clicking on it.</p>
    </div>
    
    <div class="container">
            
            <!-- PICTURE GALLERY -->
            <?php

            // open this directory 
            $myDirectory = opendir("images");

            // get each entry
            while($entryName = readdir($myDirectory)) {
            $dirArray[] = $entryName;
            }

            // close directory
            closedir($myDirectory);

            //	count elements in array
            $indexCount	= count($dirArray);

            ?>

            <?php
            // loop through the array of files and print them all in a list
            for($index=0; $index < $indexCount; $index++) {
            $extension = substr($dirArray[$index], -3);
            if ($extension == 'jpg'){ // list only jpgs
            echo '<div class="picture"><a href="images/' . $dirArray[$index] . '" download> <img src="images/' . $dirArray[$index] . '" alt="Image" /> </a></div>';
            } 
            }
            ?>
        
   	</div>
     <p>Simple photo album, helps to transfer images. Displays all images from a folder that can be downloaded by simply clicking on them.</p>
  </div>

  </body>
 </html>