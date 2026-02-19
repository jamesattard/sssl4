<?php
	//Create array.
	$months=array(
	  "Jan",
	  "Feb",
	  "Mar",
	  "Apr",
	  "May",
	  "Jun",
	  "Jul",
	  "Aug",
	  "Sep",
	  "Oct",
	  "Nov",
	  "Dec"
	  );
	   
	//Use array in a sentence. 
	echo "<p>Months in English: ";
	for($i = 0; $i<12; $i++){
		if($i < 11){
		echo "$months[$i],";
		}
		else{	echo "$months[$i].";}
	}
	echo "</p>";
?>
