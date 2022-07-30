<?php
    session_start();

    require_once('../models/UserModel.php');
    require_once('../models/usernameModel.php');

    //================================================================
    if(isset($_POST['submit'])){

        $user_id = $_REQUEST['user_id'];
        $full_name = $_REQUEST['full_name'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $address = $_REQUEST['address'];
        $program = $_REQUEST['program'];
        $blood = $_POST['blood'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];
    //    $usertype = $_REQUEST['usertype'];

    //=========================================================================

        $count = UserNameQuery($user_id);

        //print_r($count);

        if($count>0){
            echo "User Id Already Exits";
        }else{

            $users = [
                'user_id'=>$user_id,
                'full_name'=>$full_name,
                'password'=>$password,
                'email'=> $email,
                'phone'=> $phone,
                'address'=>$address,
                'gender'=>$gender,
                'program'=>$program,
                'blood'=>$blood,
                'dob'=> $dob,
    //            'usertype'=>$usertype
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
//            print_r($users['dob']);
            $status = insertUser($users);
//            print_r($status);

            if($status){
                echo "success";
            }else{
                echo "fail";
            }
        }
    }
?>