<?php
function calculateGrade($gradePoints) {
    if ($gradePoints >= 90) {
        return "A";
    } elseif ($gradePoints >= 85 && $gradePoints < 90) {
        return "B+";
    } elseif ($gradePoints >= 80 && $gradePoints < 85) {
        return "B";
    } else if ($gradePoints >= 75 && $gradePoints < 80) {
        return "C+";
    } else if ($gradePoints >= 70 && $gradePoints < 75) {
        return "C";
    } else if ($gradePoints >= 65 && $gradePoints < 70) {
        return "D+";
    } else if ($gradePoints >= 60 && $gradePoints < 65) {
        return "D";
    } else if ($gradePoints >= 50) {
        return "F";
    }
}
?>
