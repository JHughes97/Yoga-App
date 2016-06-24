<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="yogastyles.css">
	<script type="text/javascript" src="yoga.js"></script>
</head>
<body>

	<?php
		$name=$nameErr="";
		$go=true;
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(empty($_POST["name"])){
				$nameErr="*Name is required";
				$go=false;
			}else{
				$name.=test_input($_POST["name"]);
				if(!preg_match("/^[a-zA-Z ]*$/", $name)){
					$nameErr="Only letters and white space allowed";
					$go=false;
				}
			}
			if($go){
				setcookie("name",$name,time()+3600,"/");
				if(isset($_POST["english"])){
					header("Location: EnglishQuiz.php");
				}else{
					header("Location: SanskritQuiz.php");
				}
			}
		}
		function test_input($data) {
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}
	?>

	<div id="header">
		Yoga App		
	</div>
	<div id="info">
		Test your yoga knowledge by identifying positions in english and sanskrit
	</div>
	<div id="main" class="centered">
		<br><br>
		<form name="myForm"  method="post">
		<input name="name" type="text" placeholder="enter name here"><br>
		<span class="error"><?php echo $nameErr;?></span><br><br>
		<input name="english" class="b" value="english" type="submit" formaction="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br><br>
		<input name="sanskrit" class="b" value="sanskrit" type="submit" formaction="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><br>
	</form>
	</div>
	<div id="footer">
		Thanks to <a href="http://www.yogacards.com">yogacards.com</a> for the use of their yoga pictures
	</div>
</body>
</html>