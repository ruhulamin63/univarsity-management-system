<?php	
function getAllgrades(){
                $file = fopen('../models/grades.txt', 'r');
                while(!feof($file)){
                    $grades = fgets($file);
                    $gradesArray = explode('|', $grades);
                    return $gradesArray;
                }
            }
?>