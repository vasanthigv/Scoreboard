<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Main Page</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet'>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/minty/bootstrap.min.css"> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	 <script type="text/javascript" src="bootswatch.js"></script> -->

<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
	<!-- <?php
		
		// if(isset($_GET["p1"]) && isset($_GET["p2"]) && isset($_GET["p3"]) )
		{ ?> -->
			<div class="container">
			<div class="row">
				<form action="results.php" method="get">
					<div class="fleft effect">
				<!-- <div class="fleft col-lg-3 form-group"> -->
					<h1><?php
					if($_GET["p1"]){echo $_GET["p1"];}
					else{
						echo "Player 1";
					}
					?></h1>
					 <br><h2 id="score1" name="score1">00</h2>
					<br><input type="text" class="textbox textbox-small" name="s1" id="s1" size="10"><br>
					<!-- <button name="b1" id="b1">Add</button><br> -->
					<input type="button" class="btn btn-6 btn-blue btn-small" name="b1" id="b1" value="Add"><br>
					<!-- <span id="array1" name="a1"></span> -->
					<!-- <h2>Total:<span id="score1" name="score1"></span></h2> -->
				</div>
				<div class="fleft effect">
					<h1><?php
					if($_GET["p2"]){echo $_GET["p2"];}
					else{
						echo "Player 2";
					}
					
					?></h1>
					<br><h2 id="score2" name="score2">00</h2>
					<br><input type="text" class="textbox textbox-small" name="s2" id="s2" size="10"><br>
					<input type="button" class="btn btn btn-6 btn-blue btn-small" name="b2" id="b2" value="Add"><br>
					<!-- <span id="array2" name="a1"></span> -->
					<!-- <h2>Total:<span id="score2" name="score2"></span></h2> -->
				</div> 
				<div class="fleft effect">
					<h1><?php
					if($_GET["p3"]){echo $_GET["p3"];}
					else{
						echo "Player 3";
					}
					?></h1>
					 <br><h2 id="score3" name="score3">00</h2>
					<br><input type="text" class="textbox textbox-small" name="s3" id="s3" size="10"><br>
					<input type="button" class="btn btn btn-6 btn-blue btn-small" name="b3" id="b3" value="Add"><br>
					<!-- <span id="array3" name="a1"></span> -->
					<!-- <h2>Total:<span id="score3" name="score3"></span></h2> -->
				</div>
		</form>
		</div>
		<!-- 	<?php
		} ?> -->
		<div id="data" class="clear lscore row" >
			<div id="array" class="fleft2 col"></div>
			<!-- <div id="array2" class="fleft2 col"></div>
			<div id="array3" class="fleft2 col"></div> -->
			<div id="tstamp" class="fleft2 col"></div>
		</div>
		<div class="clear">
			<h3 class="leading"><span id="lead" >Nobody</span> is in leading position.</h3>
		</div>
		<div class="endgame">
			<!-- <input type="submit" value="End Game"><br> -->
			<input type="button" name="play" id="play" value="Play Again" class="btn btn-blue btn-6 btn-small">
			</form>
		</div>

  </div>
		<script type="text/javascript">
			$(document).ready(function(){
				var v1=0;
				var v2=0;
				var v3=0;
				// document.getElementById("score1").innerHTML = "hello";
				$("#b1").click(function(){
					// alert("b1 clicked");
					// var dummy=document.getElementById("s1").value;
					// console.log(dummy);
					// document.getElementById("score1").html("hello");
					
					// var dummy= parseInt(document.getElementById("s1").value);
					//console.log(dummy);
					var d1=document.getElementById("s1").value;
					if(isNaN(d1) || !d1){
						alert("Enter a numerical value");
					}
					else{
						var dummy= parseInt(d1);
				
					v1=v1+dummy;
					//console.log("v1 :"+v1);
					// var a= dummy.toString();
					// a= "<br>"+a; 
					var a = '<?php if($_GET["p1"]){echo $_GET["p1"];}
					else{
						echo "Player 1";
					} ?>'+" got "+d1+" points"+"<br>";
					document.getElementById("array").innerHTML +=a;
					document.getElementById("score1").innerHTML= v1;
					var tstring=new Date().toTimeString();
					
					// alert(abc);
					document.getElementById("tstamp").innerHTML +=tstring.substr(0,8)+"<br>";
					if(v1 > Math.max(v2,v3)){
						document.getElementById("lead").innerHTML= '<?php if($_GET["p1"]){echo $_GET["p1"];}
					else{
						echo "Player 1";
					}?>'
					}
				}
				
				});
				$("#b2").click(function(){
					var d2=document.getElementById("s2").value;
					if(isNaN(d2) || !d2){
						alert("Enter a numerical value");
					}
					else{
						var dummy= parseInt(d2);
					// var dummy= parseInt(document.getElementById("s2").value);
					v2=v2+dummy;
					// var a = d2+"<br>";
					var a='<?php if($_GET["p2"]){echo $_GET["p2"];}
					else{
						echo "Player 2";
					} ?>'+" got "+d2+" points"+"<br>";
					// var a = document.getElementById("s2").value+"<br>";
					document.getElementById("array").innerHTML +=a;
					document.getElementById("score2").innerHTML= v2;
					var tstring=new Date().toTimeString();
					
					document.getElementById("tstamp").innerHTML +=tstring.substr(0,8)+"<br>";
					if(v2 > Math.max(v1,v3)){
						document.getElementById("lead").innerHTML= '<?php if($_GET["p2"]){echo $_GET["p2"];}
					else{
						echo "Player 2";
					}?>'
					}
				}
				});
				$("#b3").click(function(){
					var d3=document.getElementById("s3").value;
					if(isNaN(d3) || !d3){
						alert("Enter a numerical value");
					}
					else{
						var dummy= parseInt(d3);
					
					v3=v3+dummy;
					// var a =d3+"<br>";
					var a='<?php if($_GET["p3"]){echo $_GET["p3"];}
					else{
						echo "Player 3";
					} ?>'+" got "+d3+" points"+"<br>";
					// var a = document.getElementById("s3").value+"<br>";
					document.getElementById("array").innerHTML +=a;
					document.getElementById("score3").innerHTML= v3;
					var tstring=new Date().toTimeString();
					
					document.getElementById("tstamp").innerHTML +=tstring.substr(0,8)+"<br>";
					if(v3 > Math.max(v1,v2)){
						document.getElementById("lead").innerHTML= '<?php if($_GET["p3"]){echo $_GET["p3"];}
					else{
						echo "Player 3";
					}?>'
					}
				}
				});
				$("#play").click(function(){
					
					location.href="index.php";
				});
				window.setInterval(function() {
				  var elem = document.getElementById('data');
				  elem.scrollTop = elem.scrollHeight;
				}, 2000);
				// if(v1 > v2 && v1 > v3){
				// 	document.getElementById("lead").innerHTML= $_GET["p1"]; 
				// }
			   // console.log("v1 is "+v1);

			   // var node1=document.getElementById("score1");
			   // d1=parseInt(node1.textContent);
			   // console.log(d1);

			 //   if(d1 > d2 && d1 > d3){
				// document.getElementById("lead").innerHTML='<?php
				// echo $_GET["p1"];
				// ?>';
				// }
				// if(d2 > d1 && d2 > d3){
				// document.getElementById("lead").innerHTML='<?php
				// echo $_GET["p2"];
				// ?>';
				// }
				// if(d3 > d2 && d3 > d1){
				// document.getElementById("lead").innerHTML='<?php
				// echo $_GET["p3"];
				// ?>';
				// }
			});
		</script>

</body>
</html>