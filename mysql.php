<?php
function findSecondLargest($arr)
{
    $largest = $arr[0];
    $secondLargest = $arr[0];
    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } else if ($num > $secondLargest && $num != $largest) {
            $secondLargest = $num;
        }
    }
    return $secondLargest;
}

$numbers = [10, 5, 8, 20, 12, 20, 15];
$secondLargest = findSecondLargest($numbers);
echo "The second largest element is: " . $secondLargest;
function countCharacter($text, $char)
{
    $count = 0;
    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] === $char) {
            $count++;
        }
    }
    return $count;
}

echo countCharacter("hello world", "o"); // Output: 2
echo '<br>';
function printFibonacci($n)
{
    $first = 0;
    $second = 1;
    echo "$first, $second"; //Print first two terms
    for ($i = 2; $i < $n; $i++) {
        $next = $first + $second; // Calculate next term
        echo ", $next";
        $first = $second; // Move forward
        $second = $next;
    }
}

$n = 10; // Number of Fibonacci terms
printFibonacci($n);
echo '<br>';

// PHP code to check whether a number is prime or Not
// function to check the number is Prime or Not
function primeCheck($number)
{
    if ($number == 1)
        return 0;
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}

// Driver Code
$number = 11;
$flag = primeCheck($number);
if ($flag == 1)
    echo "Prime";
else
    echo "Not Prime";

echo '-----';
echo "<br>";

function printTriangle($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n"; // New line after each row
    }
}

$n = 5; // Number of rows
printTriangle($n);


$data = [3, 5, 7, 2, 9, 4];
// Initialize a variable to hold the highest value
$highestValue = $data[0]; // Assume the first element is the highest initially
// Loop through the array
foreach ($data as $value) {
    if ($value > $highestValue) {
        $highestValue = $value; // Update the highest value
    }
}
echo "The highest value in the array is: " . $highestValue;

echo '<br>' . "+++++++++++++++++++++++++++++++++++" . '<br>';
$a = '1';
$b = &$a;
echo $b = "2$b";
// echo $a . ", " . $b;

echo '----------' . '<br/>';

$inputArray = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9);
$outputArray = array();

foreach ($inputArray as $inputArrayItem) {
    foreach ($outputArray as $outputArrayItem) {
        if ($inputArrayItem == $outputArrayItem) {
            continue 2;
        }
    }
    $outputArray[] = $inputArrayItem;
}
print_r($outputArray);
