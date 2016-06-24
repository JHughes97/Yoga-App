<!DOCTYPE html>
<html>
<head>
	<title>English Yoga Quiz</title>
	<link rel="stylesheet" type="text/css" href="yogastyles.css">
</head>
<body>
	<?php
		$name="";
		if(isset($_COOKIE["name"])){
			$name=$_COOKIE["name"];
		}
		$score=$total=0;
		if($_SERVER["REQUEST_METHOD"]=="GET"){
			if(isset($_GET["ans1"]) && ($_GET["ans1"]=="two")){
				$score++;
			}
			if(isset($_GET["ans2"]) && ($_GET["ans2"]=="four")){
				$score++;
			}
			if(isset($_GET["ans3"]) && ($_GET["ans3"]=="one")){
				$score++;
			}
			if(isset($_GET["ans4"]) && ($_GET["ans4"]=="one")){
				$score++;
			}
			if(isset($_GET["ans5"]) && ($_GET["ans5"]=="three")){
				$score++;
			}
			if(isset($_GET["ans6"]) && ($_GET["ans6"]=="four")){
				$score++;
			}

			if(isset($_COOKIE["total"])){
				$total=$_COOKIE["total"];
				setcookie("total",$total+$score,time()+3600,"/");
				$total+=$score;
			}else{
				$total=$score;
				setcookie("total",$total,time()+3600,"/");
			}
		}
	?>
	<div id="top">
		<div id="header2">
			<div class="left"><a href="YogaHomePage.php">Home</a></div>
			<div class="center">English Quiz</p>
			<div class="right"><a href="SanskritQuiz.php">Sanskrit Quiz</a></div>
		</div>
	</div>
	<div id="welcome">
		<?php echo "Welcome ".$name; ?>
	</div>
	<div id="score">
		<?php echo "Score: ".$score."  -  Total: ".$total; ?>
	</div>
	<div id="info2">
		Select the correct pose for each image shown. Click finish when you are done.
	</div>
	<form id="form" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="get">
		<div  id="1" class="q">
			<span class="qu">Image 1</span><br>
			<img src="img/img03.jpg"><br>
			<input type="radio" name="ans1" value="one"><span class="in">Eight Limb Pose</span><br>
			<input type="radio" name="ans1" value="two"><span class="in">Tree Pose</span><br>
			<input type="radio" name="ans1" value="three"><span class="in">Formation of a Bow</span><br>
			<input type="radio" name="ans1" value="four"><span class="in">Half Lotus Pose</span><br>
			<br><br>
		</div>
		<div id="2" class="q">
			<span class="qu">Image 2</span><br>
			<img src="img/img01.jpg"><br>
			<input type="radio" name="ans2" value="one"><span class="in">Half Lotus Pose</span><br>
			<input type="radio" name="ans2" value="two"><span class="in">Corpse Pose</span><br>
			<input type="radio" name="ans2" value="three"><span class="in">Bound Angle Pose</span><br>
			<input type="radio" name="ans2" value="four"><span class="in">Serpent Vishnu Slept On</span><br>
			<br><br>
		</div>
		<div id="3" class="q">
			<span class="qu">Image 3</span><br>
			<img src="img/img02.jpg"><br>
			<input type="radio" name="ans3" value="one"><span class="in">Lunge Pose</span><br>
			<input type="radio" name="ans3" value="two"><span class="in">Bow Pose</span><br>
			<input type="radio" name="ans3" value="three"><span class="in">Eight Limb Pose</span><br>
			<input type="radio" name="ans3" value="four"><span class="in">Corpse Pose</span><br>
			<br><br>
		</div>
		<div id="4" class="q">
			<span class="qu">Image 4</span><br>
			<img src="img/img04.jpg"><br>
			<input type="radio" name="ans4" value="one"><span class="in">Boat Pose</span><br>
			<input type="radio" name="ans4" value="two"><span class="in">Bound Angle Pose</span><br>
			<input type="radio" name="ans4" value="three"><span class="in">Eight Limb Pose</span><br>
			<input type="radio" name="ans4" value="four"><span class="in">Backbend</span><br>
			<br><br>
		</div>
		<div id="5" class="q">
			<span class="qu">Image 5</span><br>
			<img src="img/img05.jpg"><br>
			<input type="radio" name="ans5" value="one"><span class="in">Lunge Pose</span><br>
			<input type="radio" name="ans5" value="two"><span class="in">Corpse Pose</span><br>
			<input type="radio" name="ans5" value="three"><span class="in">Bound Angle Pose</span><br>
			<input type="radio" name="ans5" value="four"><span class="in">Bow Pose</span><br>
			<br><br>
		</div>
		<div id="6" class="q">
			<span class="qu">Image 6</span><br>
			<img src="img/img06.jpg"><br>
			<input type="radio" name="ans6" value="one"><span class="in">Backbend</span><br>
			<input type="radio" name="ans6" value="two"><span class="in">Lunge Pose</span><br>
			<input type="radio" name="ans6" value="three"><span class="in">Half Lotus Pose</span><br>
			<input type="radio" name="ans6" value="four"><span class="in">Extended Side Angle</span><br>
			<br><br>
		</div><br><br>
		<input class="b" type="submit" value="Finish"/>
	</form>
	<div id="footer">
		Thanks to <a href="http://www.yogacards.com">yogacards.com</a> for the use of their yoga pictures
	</div>
</body>
</html>