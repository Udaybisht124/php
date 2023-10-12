<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>In php we have a two ways to create a constant.A constant is a name or a identifier for a fixed value that cannot be changed</h1>
 <h2>1.define<br>2.constant</h2>

<?php
 
 //using define
define("Message","Hello! This is php programming");
echo Message;
echo "<br>";
//using constant
const message="Hello this is php programming";
 echo message;
 

?>

</body>
</html>