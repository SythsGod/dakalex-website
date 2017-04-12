<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
 
$dir = "images";
if(is_dir($dir)){
    if($dd = opendir($dir)){
        while (($f = readdir($dd)) !== false)
            if($f != "." && $f != "..")
                $files[] = $f;
    closedir($dd);
    }

	$n = $_GET["n"];
    $response = "";
        for($i = $n; $i<$n+9; $i++){
            $response = $response.$files[$i%count($files)].';';
        }
        echo $response;
   }
?>

<body>
<div id="header">Web Gallery | Infinite Scroll</div>
    <div id="container">   
        <a><img src="images/house.png" /></a>    
        <!--<a><img src="thumb/Bw.jpg" /></a>    
        <a"><img src="thumb/Camera.jpg" /></a>
        <a"><img src="thumb/Cat-Dog.jpg" /></a>    
        <a"><img src="thumb/CREATIV.jpg" /></a>    
        <a><img src="thumb/creativ2.jpg" /></a>
        <a><img src="thumb/Earth.jpg" /></a>   
        <a><img src="thumb/Endless.jpg" /></a>    
        <a><img src="thumb/EndlesSlights.jpg" /></a> -->   
         
        <p>1 Image Displayed | <a href="#header">top</a></p>
        <hr />
    </div>
</body>
</html>