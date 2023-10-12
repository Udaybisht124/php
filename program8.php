<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>PHP OPERATORS</H1>
<h2> Arithmatic operator</h2>
<?php
echo "Using arithmatic operator with variable <br>";
$a=5;
$b=2;
$result=$a+$b;
echo "Addition Result of 5+2=",$result."<br>";
$result=$a-$b;
echo "Subtraction Result of 5-2=",$result."<br>";
$result=$a*$b;
echo "Multiplication Result of 5*2=",$result."<br>";
$result=$a/$b;
echo "Division Result of 5/2=",$result."<br>";
$result=$a%$b;
echo "Modulus Result of 5%2=",$result."<br>";
$result=$a**$b;
echo "Exponentiation Result of 5**2=",$result."<br>";
echo "Using Logical operator with variable <br>";
if($a==5 and $b==2)
    echo "And success<br>";
    if($a==5 or $b==2)
    echo "Or success<br>";
    if($a==5 && $b==2)
    echo "&& success<br>";
    if($a==5 || $b==2)
    echo "|| success<br>";

?>
</body>
</html>



















</body>
</html>