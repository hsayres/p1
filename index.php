<?php require('quoteGenerator.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<title>Haley Sayres</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">

	<link href='css/main.css' rel='stylesheet'>

</head>
<body>

	<div class="container">

		<h1>Haley Sayres</h1>

		<img src='images/haley.jpg' alt='me'>

		<h2>About Me</h2>
		<p>
			Hi! My name is Haley and I'm a Product Manager at a cybersecurity startup in SF. I have my BS and MA from Stanford and look forward to taking this class for my personal & professional development.
		</p>

		<h2>Random Quote</h2>
		<blockquote>
        	<?=$quote?>
		</blockquote>
	</div>


</body>
</html>
