<!doctype html>
 
 <html>
 <head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <title>Title</title>
 <meta name="language" content="en" /> 

 <meta name="description" content="" /> 

 <meta name="keywords" content="" />
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;700&display=swap" rel="stylesheet">
 <style type="text/css">
 .container {display: flex; flex-wrap: wrap; justify-content: center; align-content: center; width:80%}
 img {width: 210px; height: 150px; object-fit: cover;}
 img:hover {filter:drop-shadow(0px 0px 15px rgba(0, 0, 0, 0.4))}
 .main {display: flex; height: 100vh; align-items: center; flex-direction: column;}
 h1 {font-family: "Kadwa", serif; font-weight: 700; font-style: normal; font-size: 32px;}
   
 </style>
 </head>
 <body>
   <div class="main">
    <h1>Picture gallery</h1>
    <div class="container">

        <!-- PICTURE GALLERY -->
        <?php

        // open this directory 
        $myDirectory = opendir("igrd/images/large");

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
        echo '<div class="picture"><img src="igrd/images/large/' . $dirArray[$index] . '" alt="Image" /></div>';
        } 
        }
        ?>
        
    </div>
   </div>

  </body>
 </html>