<?php

$marks = 20;

switch (true) {
    case ($marks >= 80 && $marks <= 100):
        echo "Your Grade is A+";
        break;
    case ($marks >= 70 && $marks <= 79):
        echo "Your Grade is A";
        break;
    case ($marks >= 60 && $marks <= 69):
        echo "Your Grade is A-";
        break;
    case ($marks >= 50 && $marks <= 59):
        echo "Your Grade is B";
        break;
    case ($marks >= 40 && $marks <= 49):
        echo "Your Grade is C";
        break;
    case ($marks >= 33 && $marks <= 39):
        echo "Your Grade is D";
        break;
    case ($marks >= 0 && $marks <= 32):
        echo "You are failed. Your Grade is F";
        break;
    default:
        echo "Invalid marks entered.";
        break;
}

