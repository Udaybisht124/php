<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Predefined constants</h1>
<?php

//__LINE__ CONSTANT
echo "Line Number".__LINE__."<br>";
//__FILE__ CONSTANT
echo "File Path =".__FILE__."<br>";
//__DIR__ CONSTANT
echo "Directory Name=">__DIR__."<br>";
//__FUNCTION__ CONSTANT
function f1()
{
    echo "Function Name is =".__FUNCTION__."<br>";
}
f1();

?>


</body>
</html>