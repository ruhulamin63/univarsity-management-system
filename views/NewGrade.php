<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/GradesAddCheck.php" >
        <table>
            
            <tr>
                <td>Course Name</td>
                <td><input type="text" name="Course Name"></td>
            </tr>
            <tr>
                <td>Course Grade</td>
                <td><input type="text" name="Course Grade"></td>
            </tr>
                
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
        
    
    
			
</body>
</html>