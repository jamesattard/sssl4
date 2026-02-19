<!-- Question 1 -->
<?php
$fruits = ["Apple", "Banana", "Cherry"];

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br/>";
}
?>
<!-- Question 2 -->
<?php
function sumArray($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$numbers = [10, 20, 30, 40];
echo "Sum: " . sumArray($numbers) . "<br/>"; // Outputs: Sum: 100
?>
<!-- Question 3 -->
<?php
$numbers = [1, 2, 3, 4, 5, 6];
$i = 0;

while ($i < count($numbers)) {
    if ($numbers[$i] % 2 == 0) {
        echo $numbers[$i] . "<br/>";
    }
    $i++;
}
?>
<!-- Question 4 -->
<?php
$user = [
    "Name" => "John",
    "Age" => 25,
    "City" => "Valletta"
];

foreach ($user as $key => $value) {
    echo "$key: $value<br/>";
}
?>
<!-- Question 5 -->
<?php
function multiplyArray($array, $factor) {
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] *= $factor;
    }
   
    return $array;
}

$numbers = [1, 2, 3, 4];
$result = multiplyArray($numbers, 3);

echo $result . "<br/>"; // Outputs: Array
print_r($result); // Outputs: Array ( [0] => 3 [1] => 6 [2] => 9 [3] => 12 )
?>
<!-- Question 5 -->
<?php
function multiplyArray1($array, $factor) {
    return array_map(function($item) use ($factor) {
        return $item * $factor;
    }, $array);
}

$numbers = [1, 2, 3, 4];
$result = multiplyArray1($numbers, 3);
print_r($result); // Outputs: Array ( [0] => 3 [1] => 6 [2] => 9 [3] => 12 )
?>
<!-- Question 6 -->
<?php
$numbers = [5, 10, -3, 20, -1];
$maxValue = $numbers[0];
$i = 1;

do {
    if ($numbers[$i] > $maxValue) {
        $maxValue = $numbers[$i];
    }
    $i++;
} while ($i < count($numbers));

echo "Maximum Value: " . $maxValue; // Outputs: Maximum Value: 20
?>


