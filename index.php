<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Scoreboard</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet'>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<h1>Keep track of your games with this online scoreboard</h1>
	<h3>Just enter the names of players and you are good to go</h3>
	<h1>Who's Playing?</h1>
	<form action="redirect.php" method="get">
		
		<div class="player">Player 1: <input type="text" class="textbox" name="p1" ><br></div>
		<div class="player">Player 2: <input type="text" class="textbox" name="p2" ><br></div>
		<div class="player">Player 3: <input type="text" class="textbox" name="p3" ><br></div>
		<div class="calign">
		<input type="submit" value="Start Playing" class="btn btn-6 btn-blue btn-big" >
		</div>

	</form>
<!-- 	<script type="text/javascript">
		function redirect()
		{

		}
	</script> -->
</body>
</html>