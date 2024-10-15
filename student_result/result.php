<?php
// subject marks
$math = 85;  
$science = 78; 
$english = 80;  
$history = 30;  // Below 33, student fails
$geography = 90;  

// Function to calculate the result and grade
function calculateResult($math, $science, $english, $history, $geography) {
    // Validate each subject's marks
    if ($math < 0 || $math > 100 || 
        $science < 0 || $science > 100 || 
        $english < 0 || $english > 100 || 
        $history < 0 || $history > 100 || 
        $geography < 0 || $geography > 100) {
        echo "Mark range is invalid.<br>";
        return; // Stop further processing if any marks are invalid
    }

    // Check if the student has failed in any subject (marks below 33)
    if ($math < 33 || $science < 33 || $english < 33 || $history < 33 || $geography < 33) {
        echo "The student has failed in one or more subjects.<br>";
        return; // Stop further processing if the student has failed
    }

    // Calculate total marks and average
    $totalMarks = $math + $science + $english + $history + $geography;
    $averageMarks = $totalMarks / 5;

    // Determine grade using a switch-case
    switch (true) {
        case $averageMarks >= 80:
            $grade = 'A+';
            break;
        case $averageMarks >= 70:
            $grade = 'A';
            break;
        case $averageMarks >= 60:
            $grade = 'A-';
            break;
        case $averageMarks >= 50:
            $grade = 'B';
            break;
        case $averageMarks >= 40:
            $grade = 'C';
            break;
        case $averageMarks >= 33:
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }

    // Output the total marks, average marks, and grade
    echo "Total Marks: $totalMarks <br>";
    echo "Average Marks: $averageMarks <br>";
    echo "Grade: $grade <br>";
}


// Call the function to calculate the result and grade
calculateResult($math, $science, $english, $history, $geography);

