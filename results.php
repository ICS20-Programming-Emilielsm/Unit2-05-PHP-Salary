<?php
  define("TAX_RATE", 0.1803);
	// get the hours and hourly rate from the textfields
  $hours = $_POST['hours'];
  $rate = $_POST['rate'];
  
	// calculate the total earning and tax
	$total = $hours * $rate;
	$tax = $total * TAX_RATE;
?>
<h3>Results:</h3>
Your total earnings are <?php echo "$total" ?>.
Your taxs are <?php echo "$tax" ?>.
