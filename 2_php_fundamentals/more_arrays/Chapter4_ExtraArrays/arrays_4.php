<?php
	//If form not submitted, display form.  
	if (!isset($_POST['submit'])){
	$sport=array(
	  "Shaolin Kung Fu",
	  "Basketball",
	  "Modern Penthatlon"
	);
?>
	<ul>
<?php
	foreach ($sport as $s){
	  echo "<li>$s</li>\n"; 
	}
?> 
	</ul>

	<form method="post" action="arrays_4.php">
		<p>There are various sports which one could practice, namely:</p>
		<input type="text" name="added" size="80" />
		<p />
		 
		<?php
		//Send current sport array as hidden form data.
		foreach ($sport as $s){
		  echo "<input type=\"hidden\" name=\"sport[]\" value=\"$s\" />\n";
		}
		?>
		 
		<input type="submit" name="submit" value="Go" />
	</form>
 
<?php
	//If form submitted, process input.
	}else{
	//Retrieve established sport array.
	$sport=($_POST['sport']);
	//Convert user input string into an array.
	$added=explode(',',$_POST['added']);
	 
	//Add to the established array.
	$sport=array_merge($sport, $added);
	//This could also be written as: array_splice($sport, count($sport), 0, $added);
	/*
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 2);
	// $input is now array("red", "green")

	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 1, -1);
	// $input is now array("red", "yellow")

	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 1, count($input), "orange");
	// $input is now array("red", "orange")

	$input = array("red", "green", "blue", "yellow");
	array_splice($input, -1, 1, array("black", "maroon"));
	// $input is now array("red", "green",
	//          "blue", "black", "maroon")

	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 3, 0, "purple");
	// $input is now array("red", "green",
	//          "blue", "purple", "yellow");
	*/

	//Return the new list to the user.
	echo "<p>Here is the list with your additions:</p>\n<ul>\n";
	foreach($sport as $s){
	  //The trim functions deletes extra spaces the user may have entered.
	  echo "<li>".trim($s)."</li>\n";  
	}
	echo"</ul>";  
	 
?>
	<p>Add more?</p>
	
	<form method="post" action="arrays_4.php">
		<input type="text" name="added" size="80" />
		<p />
		<?php
		//Send current sport array as hidden form data.
		foreach ($sport as $s){
		  echo "<input type=\"hidden\" name=\"sport[]\" value=\"$s\" />\n";
		}
		?>
		<input type="submit" name="submit" value="Go" />
	</form>
<?php
	}
?>
