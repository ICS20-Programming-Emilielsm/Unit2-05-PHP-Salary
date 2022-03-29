<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Salary in PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Salary in PHP</h1>";
			echo "<h3>This program will calculate your salary and tax.</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
     <h3><?php echo "Please enter your employment information;"?></h3>
        <label for="Hours">Number of Hours Worked:</label>
        <input type="number" step="any" name="hours" id="hours" placeholder="Hours"><br><br>
        <label for="hourly-rate">Hourly Rate: $</label>
        <input type="number" step="any" name="rate" id="rate" placeholder="Rate"><br><br>
        <input type="submit" value="Pay">
		</form>
      
			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
	    </iframe>
	</body>
</html>