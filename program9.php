
<?php
// Comparison Operators
echo "*Comparison Operators<br>";
$a = 1;
$b = 2;

if ($a == $b) {
  echo "a is equal to b<br>";
} else {
  echo "a is not equal to b<br>";
}

if ($a > $b) {
  echo "a is greater than b<br>";
} else {
  echo "a is not greater than b<br>";
}

if ($a < $b) {
  echo "a is less than 0b<br>";
} else {
  echo "a is not less than b<br>";
}

if ($a >= $b) {
  echo "a is greater than or equal to b<br>";
} else {
  echo "a is not greater than or equal to b<br>";
}

if ($a <= $b) {
  echo "a is less than or equal to b<br>";
} else {
  echo "a is not less than or equal to b<br>";
}

// Assignment Operators
echo" *Assignment Operators<br>";
$a = 1;

$a += 1; // $a is now 2
echo $a."<br>";
$a -= 1; // $a is now 1
echo $a."<br>";
$a *= 2; // $a is now 2
echo $a."<br>";
$a /= 2; // $a is now 1
echo $a."<br>";
$a %= 2; // $a is now 1
echo $a."<br>";
// Increment and Decrement Operators
echo "*Increment and Decrement Operators<br>";
echo $a++."<br>"; // $a is now 2
echo $a--."<br>"; // $a is now 1

?>
