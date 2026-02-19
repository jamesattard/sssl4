<?php
	//If form not submitted, display form.
	if (!isset($_POST['submit'])){
?>
		<form method="post" action="arrays_3.php">
			<p>Please enter your information:</p>
			Name: <input type="text" name="name" />
			Surname: <input type="text" name="surname" />
			DOB: <input type="text" name="dob" />
			<p>Please choose the hobbies you have from the list below. 
			<br />Choose all that apply. </p>
			<input type="checkbox" name="hobby[]" value="martial_arts" />Martial Arts<br />
			<input type="checkbox" name="hobby[]" value="football" />Football<br />
			<input type="checkbox" name="hobby[]" value="volleyball" />Volleyball<br />
			<input type="checkbox" name="hobby[]" value="swimming" />Swimming<br />
			<p /> 
			<input type="submit" name="submit" value="Go" />
		</form>
	 
<?php
	//If form submitted, process input.
	}else{
		//Retrieve the date and location information.
		$inputLocal = array(
		  $_POST['name'],
		  $_POST['surname'],
		  $_POST['dob']
		);
		echo "Welcome $inputLocal[0] $inputLocal[1], DOB: $inputLocal[2], you have the following hobby / hobbies:<br /> <ul>";
		foreach($_POST['hobby'] as $w){
		  echo "<li>$w</li>\n";  
		}
		echo "</ul>";
	}
?>
