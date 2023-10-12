<html>
<head>
    <title></title>
</head>
    <body>
    <h1>local scope of a variable</h1>
<?php
//variable scope has three types 1.local 2.global 3.static

function f1()
{
    $a=10;//local scope a variable
    echo $a;
}
f1();

?>
</body>
</html>
