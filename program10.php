<?php
echo "<b>Branching statements</b><br>";
echo "using only if<br><br>";
echo "example of if statements<br><br>";
$age=18;
if($age == 18){
    echo "your age is $age<br>";
    echo "your are eligible for driving<br><br>";
}
echo"using if else statements<br><br>";
$num=2;
if($num%2==0){
    echo"number is even<br>";

}
else{
    echo"number is odd<br>";
}
echo "using if else if<br><br>";
$perc=80;
if($perc>80){
    echo"First Divison<br>";

}
elseif($perc>50){
    echo"Second Divison<br>";
}
else{echo "Divison is Third<br><br>";}
echo"Using Switch statements<br><br>";
$day=3;
switch($day){
    case '1':
    echo "MONDAY<br><br>";
        break;
        case '2':
        echo"TUESDAY<br><br>";
            break;
            case '3':
                echo"WEDNESDAY<br><br>";
                    break;
                    case '4':
                        echo"THURSDAY<br><br>";
                            break;
                            case '5':
                                echo"FRIDAY<br><br>";
                                    break;
                                    case '6':
                                        echo"SATURDAY<br><br>";
                                            break;
                                            case '7':
                                                echo"SUNDAY<br><br>";
                                                    break;
                                        default:
                                        echo"error<br><br>";
                                        



}
?>


