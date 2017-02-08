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
	<img src="bunny1.jpg" alt="bunny"/> 
	<br>
	<br>
	<h2>About Me</h2>
	<p>I am currenlty finishing up my last semester for a Masters Degree in Music Performance at the University of Toronto. (I play clarinet!) 
		I am also co-currently pursuing an ALM Degree at the Harvard Extension School. 
		I decided to take this course as it seems the world is progressing to a place where the web space is becoming more and more prominent and I thought that this course would be useful. </p>
	<h2>Quote: </h2>
	<p> <?php echo $quote[rand(0, 2)] ?> </p>

</div>

</body>
</html>