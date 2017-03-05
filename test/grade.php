<?php
const name = "小明";
const score = "78";
$g =floor(score / 10);
$grade;
switch($g) {
	case 10 :
		$grade = 'A';
		break;

	case 9 :
		$grade = 'A';
		break;

	case 8:
		$grade = 'B';
		break;
	case 7:
		$grade = 'C';
		break;
	case 6 :
		$grade = 'D';
		break;
	default :
		$grade = 'E';
		break;
}
?>
<html>
	<center> 
		学生姓名：<?php echo(name); ?>
		<br>
		学生分数：<?php echo(score); ?>分
		<br>
		成绩等级：<?php echo($grade); ?>
		<br>

	</center>
</html>
