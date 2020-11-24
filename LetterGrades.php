<?php
function checkGrade($Grade)
{
    
    switch ($Grade) {
        case "A":
            echo "Your grade is excellent."; 
            break;
        case "B":
            echo "Your grade is  good."; 
            break;
        case "C":
            echo "Your grade is fair."; 
            break;
        case "D":
            echo "You are barely passing."; 
            break;
        case "F":
            echo "You failed.";
            break;
    }
}
    checkGrade($_GET["grade"]); 
?>