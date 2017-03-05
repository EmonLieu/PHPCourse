<html>
<center>
  <?php
  //定义2个变量
  		$a=10;
		$b=20;
		$c;
//交换2个变量
  ?>
  交换前两个变量 a=<?php echo($a);?> b=<?php echo($b);?><br>
  	<?php $c=$a;
		$a=$b;
		$b=$c;
		?>
 交换后两个变量  a=<?php echo($a);?> b=<?php echo($b);?>
  </center>
</html>
