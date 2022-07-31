<?php	
	
	
	if(isset($_REQUEST['submit'])){
		
		$coursename = $_POST['coursename'];
		$coursegrade = $_POST['coursegrade'];
		

		if( $coursename != null &&  $coursegrade != null){
			
			
			$grades= "|" . $coursename . "|" . $coursegrade ;

			$file = fopen('../models/grades.txt', 'a+');
			fwrite($file, "$grades");
			fclose($file);
			header('location: ../views/Grades.php');


		}else{
			echo "Missing input";
		}
	}

?>