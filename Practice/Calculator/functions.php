<?php
// Following this tutorial :-  https://www.youtube.com/watch?v=STJfIu8T3kM 

function mycalculator($num01, $oper, $num02)
{
    $sum;
    switch ($oper) {
        case "add":
            $sum = $num01 + $num02;
            break;
        case "sub":
            $sum = $num01 - $num02;
            break;
        case "multiply":
            $sum = $num01 * $num02;
            break;
        case "divide":
            $sum = $num01 / $num02;
            break;

        default:
            $sum = "There was an error!";
            break;

    }
    return $sum;

}

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Value: " . mycalculator($num01, $oper, $num02);

?>