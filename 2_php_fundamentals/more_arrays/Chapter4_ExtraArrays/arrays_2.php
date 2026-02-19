<?php
	//Create array.
	$colors=array(
	  "black",
	  "yellow",
	  "white"
	  );
	   
	//Print values of array to browser, separated by commas. 
	foreach($colors as $c){
	  echo "$c, ";
	}
	 
	//Sort array in ascending order.
	sort($colors);
	 
	//Print array as bulleted list.
	echo "<ul>" ;
	foreach($colors as $c){
	  echo "<li>$c</li>";
	}
	echo "</ul>" ;
	 
	//Add 3 colors to array.
	array_push($colors, "maroon", "red", "orange") ;
	 
	//Sort again, and print bulleted list.
	sort($colors);
	echo "<ul>";
	foreach($colors as $c){
	  echo "<li>$c</li>";
	}
	echo "</ul>";
?>
