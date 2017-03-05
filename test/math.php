<?php
	define('banjin',15); 
	const pai=3.14;
	
	$zhouchang=2*pai*banjin;
	$mianji=pai*banjin*banjin;
	?>
	<center>计算圆的周长和面积<br>
	<?php
	
	echo ("面积").("<font color=red>").$mianji.("</font>");?>
	<br>
	<?php
	echo ("周长").("<font color=red>").$zhouchang.("</font>");?>
	<br>
	<?php
	echo ("半径").("<font color=red>").banjin.("</font>");
	?>
</center>