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
   
h1 {font-family: "Kadwa", serif; font-weight: 700; font-style: normal;font-size: 32px; text-align: center;}
p {font-family: "Kadwa", serif; font-weight: 400; font-style: normal;font-size: 18px; text-align: center; color: red;}
img {width: 400px; height: 250px; object-fit: cover; background-color: aqua;}
img:hover {filter:drop-shadow(0px 0px 15px rgba(0, 0, 0, 0.4))}
.container {display: flex; flex-direction:column; justify-content: center; align-items: center;}
/* 
.main {display: flex; height: 100vh; justify-content: center; align-items: center; flex-direction: column;}
.container {display: flex; flex-direction:column; justify-content: center; width:80%; height: 80%;}
*/


   @media (min-width: 850px) 
   {
	.main {display: flex; height: 100vh; justify-content: center; align-items: center; flex-direction: column;}
	.container {display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center; align-content: flex-start; width:80%; height: 80%;}
	img {width: 250px; height: 180px; object-fit: cover; background-color: aqua;}
	img:hover {filter:drop-shadow(0px 0px 15px rgba(0, 0, 0, 0.4))}
	h1 {font-family: "Kadwa", serif; font-weight: 700; font-style: normal;font-size: 32px; text-align: center;}
	p {font-family: "Kadwa", serif; font-weight: 400; font-style: normal;font-size: 18px; text-align: center; color: green;}   
  } 


 </style>
   
 </head>
 <body>
	<div class="main">
    	<div>
        	<h1>Album foto</h1>
          	<p> Click pe imagine => descarca imaginea</p>
     	</div>
    
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
            //echo '<div class="picture"><img src="igrd/images/large/' . $dirArray[$index] . '" alt="Image" /></div>';
             echo '<div class="picture"><a href="igrd/images/large/' . $dirArray[$index] . '" download> <img src="igrd/images/large/' . $dirArray[$index] . '" alt="Image" /> </a></div>';
            } 
            }
            ?>
        
   		</div>
	</div>

  </body>
 </html>