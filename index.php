<?php 

$quote = ['“You should enjoy the little detours to the fullest. Because that is where you will find the things more important than what you want.” - Ging Freecss', '"You miss 100% of the shots you don’t take. – Wayne Gretzky"','"To be or not to be, that is the question" - William Shakespeare']

?>


<!DOCTYPE html>
<html>
<head>
	<title>Celia Tang</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css"/>
</head>

<body>

	<div>
	<br>
	<h1>Celia Tang</h1>
	<br>
	<img src="bunny1.jpg" height="20%" width="20%"> </img>
	<br>
	<br>
	<h2>About Me</h2>
	<p>blablabal</p>
	<h2>Quote: </h2>
	<p> <?php echo $quote[rand(0, 2)] ?> </p>

</div>

</body>
</html>