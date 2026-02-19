<?php
  //Create associative array with countries as keys, cities as values.
  $country=array(
    "Malta" => "Euro",
    "UK" => "Sterling",
    "USA" => "US Dollars",
	"ITALY" => "Euro"
  );
  //If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
   
	<form method="post" action="arrays_5.php">
	<p>Please choose a country:</p>
	<select name="country">
 
<?php
  //Use array to create options for select field.
  //Be sure to escape the quotes and include a line feed. 
  foreach(array_keys($country) as $c){
    echo "<option value=\"$c\">$c</option>\n";
  }
?>
 
</select> <p />
<input type="submit" name="submit" value="Go">
</form>
 
<?php
  //If form submitted, process input.
  }else{
    //Retrieve user response.
    $chosen_country=$_POST['country'];
    //Find corresponding key in associative array.
    $currency=$country[$chosen_country];
    //Send the data back to the user.
    echo "<p>The currency in $chosen_country is: $currency.</p>" ;
   
  }
?>
