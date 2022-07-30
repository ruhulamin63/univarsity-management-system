<?php	
function getAllCourse(){
                $file = fopen('../models/course.txt', 'r');
                while(!feof($file)){
                    $notice = fgets($file);
                    $courseArray = explode('|', $notice);
                    return $courseArray;
                }
            }
            function getGrades(){
    $file = fopen('../models/Grades.txt', 'r');
                while(!feof($file)){
                    $grades = fgets($file);
                    $gradesArray = explode('|', $grades);
                    return $gradesArray;
                }

}
?>
                