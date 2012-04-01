<!DOCTYPE html>
<html>
	<head>
		<title>Numbers</title>
		<style>
   .red {
    color: red;
    font-weight: bold;
   }
   .blue {
    color: blue;
    font-weight: bold;
   }
  </style>
	</head>
	<body>
		<form action="homework_1.php" method="get">
			<label for="numbers">Enter numbers :</label>
			<input type="text" name="numbers" />
			<br />
			<input type="submit" value="ok" />
		</form>
		<?php
		function isPrime($test)
		{
        $prime = 'The number '.$_GET['numbers'].' is prime!';
        if ($test % 2 == 0 && $test != 2)
			{
        return '<div class="blue">The number '.$_GET['numbers'].' is not prime!</div>';
			}	        
		if ($test == 2 || $test == 3) {
		return 'The number '.$_GET['numbers'].' is prime!';
			}
		for ($try = 3; $try < $test; $try++){
		if (($test % $try) == 0) {
		$prime = '<div class="blue">The number '.$_GET['numbers'].' is not prime!</div>';
	
		}
		}
		return $prime;
		
		}
		
        if(is_numeric ($_GET['numbers']))
		{
		if ($_GET['numbers']>=0 && $_GET['numbers']<=19999 )
		{
		
		$i=isPrime($_GET['numbers']);
	     echo $i;
		isPrime($_GET['numbers']);

		}
		
		else
		{
		echo '<div class="red">The parameter is not within the range [0,19999]</div>';
		}
		}
		else 
		{ 
		echo  '<div class="red">The parameter is not a number</div>';
		}
		
		
		?>
	</body>
</html>