<?php

$students = [
    ["Ahmed", 95],
    ["Mohamed", 82],
    ["Ali", 74],
    ["Sara", 61],
    ["Mona", 48]
];

$successfulCount = 0;
$failedCount = 0;
$totalSum = 0;
$maxGrade = -1;
$topStudent = "";

echo " Students Grades & Letters\n";

foreach ($students as $student) {
    $name = $student[0];
    $grade = $student[1];
    
    if ($grade >= 90) {
        $gradeLetter = 'A';
    } elseif ($grade >= 80) {
        $gradeLetter = 'B';
    } elseif ($grade >= 70) {
        $gradeLetter = 'C';
    } elseif ($grade >= 60) {
        $gradeLetter = 'D';
    } else {
        $gradeLetter = 'F';
    }
    
    echo "Name: {$name} | Grade: {$grade} | Letter: {$gradeLetter}\n";
    
    if ($grade >= 60) {
        $successfulCount++;
    } else {
        $failedCount++;
    }
    
    $totalSum += $grade;
    
    if ($grade > $maxGrade) {
        $maxGrade = $grade;
        $topStudent = $name;
    }
}

$totalStudents = count($students);
$average = $totalStudents > 0 ? ($totalSum / $totalStudents) : 0;

echo "Feloooooooooooooooooooooooooooooooooo\n";
echo " General Statistics \n";
echo "Passed Students: {$successfulCount}\n";
echo "Failed Students: {$failedCount}\n";
echo "Average Grade: " . round($average, 2) . "\n";
echo "Top Student: {$topStudent} with a grade of ({$maxGrade})\n";
?>