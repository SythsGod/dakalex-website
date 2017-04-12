<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type = "text/javascript">
	function displayNextImage() {
	  x = (x === images.length - 1) ? 0 : x + 1;
	  document.getElementById("img").src = images[x];
	}
	
	function displayPreviousImage() {
	  x = (x <= 0) ? images.length - 1 : x - 1;
	  document.getElementById("img").src = images[x];
	}
	
	function startTimer() {
	  setInterval(displayNextImage, 3000);
	}
	
	var images = [], x = -1;
	images[0] = "images/house.png";
	images[1] = "images/sun.jpg";
	images[2] = "images/gradient.jpg";
</script>
</head>

<body onload = "startTimer()">
    <img id="img" src="images/gradient.jpg">
</body>
</html>