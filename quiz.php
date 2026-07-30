<!DOCTYPE html>
<html>
<head>
	<title>Quiz Application</title>
</head>
<body>
	<h1>Quiz Application</h1>
	<form method="post">
		<p>Question 1: What is the national bird of India?</p>
			<input type="radio" name="q1" value="Peacock" required>Peacock<br>
			<input type="radio" name="q1" value="Eagle">Eagle<br>
			<input type="radio" name="q1" value="Hen">Hen<br>
		<p>Question 2: What is the capital of India?</p>
			<input type="radio" name="q2" value="Gujarat">Gujarat<br>
			<input type="radio" name="q2" value="New Delhi" required>New Delhi<br>
			<input type="radio" name="q2" value="Tamil Nadu">Tamil Nadu<br>
			<input type="submit" name="submit" value="Submit">
	</form>
<?php
	function checkAns($userAns){
		$correctAns=array('q1'=>'Peacock','q2'=>'New Delhi');
		$score=0;
		foreach($userAns as $question => $userAns){
			if(isset($correctAns[$question])&&$correctAns[$question]===$userAns){
				$score++;
			}
		}
	return $score;
	}
	
	if(isset($_POST['submit'])){
		$userAns=array(
			'q1'=>$_POST['q1'],
			'q2'=>$_POST['q2']
		);
	$score=checkAns($userAns);
		echo"<h2>Quiz Results:</h2>";
		echo"<p>Your Score:$score out of 2</p>";
	}
?>
</body>
</html>
