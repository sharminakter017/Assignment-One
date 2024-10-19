<?php


// Sample marks for 5 subjects
$bangla = 20;
$english = 35;
$math = 50;
$physics = 60;
$chemistry = 58;

// Calculate total and average marks
$totalMarks = $bangla + $english + $math + $physics + $chemistry;
$averageMarks = $totalMarks / 5;

echo "Total Marks: $totalMarks<br>";
echo "Average Marks: $averageMarks<br>";

// Determine grade based on average marks
switch (true) {
    case ($averageMarks >= 80 && $averageMarks <= 100):
        echo "Your Grade is A+";
        break;
    case ($averageMarks >= 70 && $averageMarks <= 79):
        echo "Your Grade is A";
        break;
    case ($averageMarks >= 60 && $averageMarks <= 69):
        echo "Your Grade is A-";
        break;
    case ($averageMarks >= 50 && $averageMarks <= 59):
        echo "Your Grade is B";
        break;
    case ($averageMarks >= 40 && $averageMarks <= 49):
        echo "Your Grade is C";
        break;
    case ($averageMarks >= 33 && $averageMarks <= 39):
        echo "Your Grade is D";
        break;
    case ($averageMarks >= 0 && $averageMarks <= 32):
        echo "You are failed. Your Grade is F";
        break;
    default:
        echo "Invalid marks entered.";
        break;
}



