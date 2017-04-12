<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Home | Dakalex</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="opmaak/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class='banner'><img src="../images/icon.png" width="100%"></div> <!-- image -->
	<div class='content-container'>
		<div class='content-section'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend, ante id sodales vehicula, lacus arcu consectetur nibh, id scelerisque enim mi et turpis. Suspendisse risus diam, placerat eu sagittis sit amet, posuere ullamcorper eros. Morbi id fermentum orci, pretium sodales mauris. Phasellus accumsan euismod leo sit amet placerat. Aliquam erat volutpat. Ut ultrices vulputate laoreet. Etiam vel lorem ante. Quisque eleifend molestie nisi ac imperdiet. Aenean consequat rhoncus felis, eu dapibus nulla molestie a. Praesent iaculis a elit non fringilla. Nulla facilisis in velit at vehicula. Fusce eget faucibus magna, et feugiat ante. Proin vel interdum purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium ipsum libero, et fermentum magna faucibus sit amet. Fusce mattis sed urna in tincidunt.</div> <!-- short text -->
	</div>
	<div class='disclaimer'>Copyright © <?php echo date('Y') ?> Dakalex Bvba. All rights reserved.</div>
</body>
</html>

<style>
	* {
		margin: 0;
		padding: 0;
	}

	body, html {
		width: 100%;
		height: 100%;
	}

	body {
		background: #ffa500;
	}

	.banner {
		position: absolute;
	}

	.content-container {
		display: flex;

		width: 100%;
		height: 100%;

		flex-direction: column;
		justify-content: center;
	}

	.content-section {
		display: block;

		width: 100%;

		text-align: justify;

		font-family: Tahoma, Geneva, sans-serif;
	}

	.disclaimer {
		display: inline-block;
		position: absolute;

		height: 50px;
		width: 100%;

		text-align: center;
		line-height: 50px;

		/* Good info on viewport-percentage lengths */
		/* http://stackoverflow.com/questions/16056591/font-scaling-based-on-width-of-container */

		font-family: Verdana, Geneva, sans-serif;
		font-size: 14px;

		bottom: 0;

		background: #566EC5;
	}
</style>