<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>static scope a variable</h1>
<?php
function f3()
{
 static $a=0;
echo $a;
echo "<br>";
$a++;
}
f3();
f3();
f3();

?>
</body>
</html>