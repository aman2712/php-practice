<?php
$grade = 'V';

// if($marks >= 85 and $marks <= 100){
//     echo "<h1>A Grade</h1>";
// }else if($marks >= 70 and $marks <= 84){
//     echo "<h1>B Grade</h1>";
// }else if($marks >= 55 and $marks <= 69){
//     echo "<h1>C Grade</h1>";
// }else if($marks >= 45 and $marks <= 54){
//     echo "<h1>D Grade</h1>";
// }else if($marks >= 0 and $marks <= 44){
//     echo "<h1>Fail</h1>";
// }else{
//     echo "<h1>Invalid number</h1>";
// }

$grade = strtoupper($grade);
switch($grade){
    case 'A':
        echo "Excellent";
        break;
    case 'B':
        echo "Average";
        break;
    default:
        echo "Invalid";
        break;
}
?>