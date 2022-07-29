<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/courseAddCheck.php" >
        <table>
            
            <tr>
                <td>Course credit</td>
                <td><input type="text" name="courseId"></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td><input type="text" name="courseName"></td>
            </tr>
                
            
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
        </table>
    </form>

    <script>
            function validate(){
                
                let courseId = document.getElementById('courseId').value;
                if(courseId != ""){
                    return true;
                }
                else{
                    alert('null courseId')
                    return false;
                }
                let courseName = document.getElementById('courseName').value;
                if(courseName != ""){
                    return true;
                }
                else{
                    alert('null courseName')
                    return false;
                

            }
        </script>
	
    

    </fieldset>
        
        
    
    
			
</body>
</html>