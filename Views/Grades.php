<?php
    include 'navbar.php';
    require_once '../Controllers/Gradeslist.php';
    $grades = getAllgrades();
?>
    <!-- Course Form Stated  -->
    <form action="">
        <table>
            
            <tr>
            
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <tr align="center" >
                        <th >Course name</th>
                        <th >Course Grade </th>

                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($grades as $grades){
                            
                            
                            echo "<td>$grades</td>";
                            $i++;
                            if($i>1){
                                $i=0;
                                echo "</tr>";
                                echo "<tr align='center'>";
                            }
                            
                        }
                           
                        ?>
                    </tr>
                         
                </table>
            </tr>
        </table>

    </form>
    
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
   
    
    
			
</body>
</html>
