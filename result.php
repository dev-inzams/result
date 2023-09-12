<?php

$grade = $_POST['mark'];

switch ( $grade ) {
case $grade >= 80:
    $gradeStore = "A+";
    break;

case $grade < 80 && $grade >= 75:
    $gradeStore = "A";
    break;

case $grade < 75 && $grade >= 70:
    $gradeStore = "A-";
    break;

case $grade < 70 && $grade >= 65:
    $gradeStore = "B+";
    break;

case $grade < 65 && $grade >= 60:
    $gradeStore = "B";
    break;

case $grade < 60 && $grade >= 55:
    $gradeStore = "B-";
    break;

case $grade < 55 && $grade >= 50:
    $gradeStore = "C+";
    break;

case $grade < 50 && $grade >= 45:
    $gradeStore = "C";
    break;

case $grade < 45 && $grade >= 40:
    $gradeStore = "C-";
    break;

case $grade < 40 && $grade >= 35:
    $gradeStore = "D";
    break;

case $grade < 33:
    $gradeStore = "Fail";
    break;

};

if ( $grade < 33) {
    echo "Try again next year sorry for your result </br> $gradeStore";
} else {
    echo "Congratulations </br> $gradeStore";
}





