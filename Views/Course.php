<?php
    include 'navbar.php';
    require_once '../Controllers/courseList.php';
    $courses = getAllCourse();
    $grades=getGrades();
?>
    
    <form action="">
        <table>
            <tr><td></td></tr>
            <tr>
                <td></td>
                <td>
               
                
                </select>
                </td>
  
               </td>
               <td></td>
               <td></td>
               
            </tr>
            <tr>
                <td><b>Courses Taken:</b></td>
            </tr>
            <tr>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <tr align="center" >
                        <th >Course Credit</th>
                        <th >Course Name</th>
                        <!-- <th >Teacher</th> -->
                        <td><button><a href="./AddNewCourse.php">Course to be added</a></button></td>
                    
                    </tr>


                    <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($courses as $course){
                            
                            
                            echo "<td>$course</td>";
                            $i++;
                            if($i>1){
                                $i=0;
                                echo "</tr>";
                                echo "<tr align='center'>";
                            }
                            
                        }
                           
                        ?>
                    
                        
                         
                </table>
            </tr>
        </table>

    </form>
    
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
   
    
    
			
</body>
</html>