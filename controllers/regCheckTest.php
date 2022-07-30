<?php
	session_start();

	require_once('../models/UserModel.php');
	require_once('../models/usernameModel.php');

//================================================================
	if(isset($_POST['submit'])){

		$username = $_REQUEST['username'];
		$name = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$address = $_REQUEST['address'];
		$department = $_REQUEST['department'];
		$blood = $_POST['blood'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
//		$usertype = $_REQUEST['usertype'];

//=========================================================================
//        var_dump($username);
		$count = UserNameQuery($username);

		if($count>0){
			echo "Username Already Exits";
		}else{

			$users = [
					'username'=>$username, 
					'name'=>$name,
					'password'=>$password,
					'email'=> $email,
					'phone'=> $phone,
					'address'=>$address,
					'gender'=>$gender,
					'department'=>$department,
					'blood'=>$blood,
					'dob'=> $dob,
//					'usertype'=>$usertype
				];
				
			$status = insertUser($users);
//            var_dump($status);

			if($status){
					echo "success";				
			}else{
				echo "missingInfo";
			}
		}
	}
?>