<div class='filler'></div>

<div class='menu-block'>
	<a class='menu' href='index.php'>Home</a>
	<a class='menu' href='werken.php'>Werken</a>
	<a class='menu' href='over_ons.php'>Over ons</a>
	<a class='menu' href='contact.php'>Contact</a>
</div>

<style>
	.filler {
		position: fixed;

		width: 100%;
		height: 50px;

		background: #dd855c; /*rgba(110, 116, 165, 0.8);*/

		z-index: 2;
	}

	.menu-block {
		position: fixed;

		width: 80%;
		height: 50px;

		min-width: 500px;

		margin-left: 10%;

		z-index: 3;
	}

	a.menu {
		float: left;
		display: block;
		width: 25%;
		margin: 0 auto 0 auto;

		font-family: Century Gothic, sans-serif;

		text-decoration: none;
		color: #745151;
		text-transform: uppercase;
		line-height: 50px;
		text-align: center;
	}

	a:visited {
		text-decoration: none;
		color: #745151;
		text-transform: uppercase;
	}

	a:hover.menu {
		display: block;

		background: rgba(55, 58, 82, 0.4);
	}
</style>