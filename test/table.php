<html>
	<head>
		
	</head>
	
	<body>
	<div style="background: url(img/04.jpg) ; height:500px;width:1000px">
	 <table>
	<?php
	   
		for($i=1;$i<=9;$i++)
		 {
		 	echo "<td>";
		 	for($j=1;$j<=$i;$j++)
			{
			
				echo "<tr>"."<font size=5px;>"."$j*$i=".($i*$j)."&nbsp;&nbsp;&nbsp;"."</font>"."</tr>";
			
			}
			echo "</td>";
			echo "<br>\n";
			echo "<br>\n";
		 }
		
	?>
	
	</table>
	
	</div>
	</body>
</html>