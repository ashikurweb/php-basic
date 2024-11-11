<?php 

// $totalLessions = 30;
// $completedLessions = 7;

// $percentageCompleted = $completedLessions / $totalLessions * 100;
// $percentageCompleted = number_format( $percentageCompleted, 2 );

// echo "You've completed {$percentageCompleted}% of this course!";

function course($totalLession, $completedLessiond) {
    $percentageCompleted = number_format(($completedLessiond / $totalLession * 100));
    return "You've completed {$percentageCompleted}% of this course!";
}

echo course(30, 7);