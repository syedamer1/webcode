<html>
<body>

	<form action="" method="post">
		Enter Number less than 500: <input type="text" name="number"><br><br><br>
Select Loop Type<select name="loop_type">
  <option value="while">while</option>
  <option value="dowhile">dowhile</option>
  <option value="forloop">forloop</option>
  <option value="foreach">foreach</option>
</select><br>

		<input type="submit">
	</form>
	<?php
	if(empty($_POST)==false)
	{
			
		$x1 = 1;
		$x2 = 1;
		$loop_type=$_POST['loop_type'];
		if($loop_type=='while')
		{
		while($x1 <= $_POST['number']) {
			echo "The number is: $x1 <br>";
			//echo "while";
			$x1++;
		}
		}
		else if($loop_type=='dowhile')
		{
		//while loop ends here and do while loop starts
		do 
		{
			echo "The number is: $x2 <br>";
			
			$x2++;
		}
		while($x2<=$_POST['number']);
		}
		else if($loop_type=='forloop')
		{
		
  		//do while loop end here and for loop start 
		for ($x = 1; $x <= $_POST['number']; $x++) {
  		  echo "The number is: $x <br>";
		}
			}
	}

	?>
</body>
</html>