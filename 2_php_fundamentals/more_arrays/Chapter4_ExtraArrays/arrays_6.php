<?php
//Create an array of 30 Marks.
$marks = array(
  100, 89, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 
  68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83
);
 
//Get number of students.
$count = count($marks);
 
//Get a total of all marks.
$total = 0;
foreach ($marks as $h){
  $total += $h;
}
 
//Calculate average.
$avg = round($total / $count);
 
//Send data to the browser. 
echo "<p>The average mark is: $avg.</p>\n";
 
//Sort the temps and get the top and bottom five. 
//Use rsort to produce a descending sort.
rsort($marks);
//Pull out the top 5 temps.
$topMarks = array_slice($marks, 0, 5);
echo "<p>The top 5 marks: <br />";
foreach($topMarks as $t){
  echo "$t  <br/>";
}
echo "</p>";
   
//Pull out the bottom five temps.
$lowMarks = array_slice($marks, -5, 5);
echo "<p>The lowest marks: <br/>";
foreach($lowMarks as $l){
  echo "$l  <br/>";
}
echo "</p>";
 
?>
