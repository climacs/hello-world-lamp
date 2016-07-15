<?php
	$mysqli = @new mysqli('localhost','root');
?>
<html>
<head>
	<title>Hello world!</title>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}

	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<img id="logo" src="logo.gif" />
	<h1><?php echo "Hello world!"; ?></h1>
	<?php if(!$mysqli) { ?>
		<h2>Can't connect to local MySQL Server!</h2>
	<?php } else { ?>
		<h2>MySQL Server version: <?php echo $mysqli->server_info; ?></h2>
	<?php } ?>
</body>
</html>