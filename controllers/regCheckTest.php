<?php
    session_start();

    require_once('../models/UserModel.php');
    require_once('../models/usernameModel.php');

    //================================================================
    if(isset($_POST['submit'])){

        $username = $_REQUEST['username'];
        $full_name = $_REQUEST['full_name'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
//        $address = $_REQUEST['address'];
        $program = $_REQUEST['program'];
//        $blood = $_POST['blood'];
//        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];
    //    $usertype = $_REQUEST['usertype'];

    //=========================================================================

        $count = UserNameQuery($username);

        //print_r($count);

        if($count>0){
            echo "User Id Already Exits";
        }else{
            if($username==""||$password==""||$email==""||$phone==""||$program==""||$dob==""){
                echo "Please check your required field ?";
//                var_dump('test');
            }else{
                $users = [
                    'username'=>$username,
                    'full_name'=>$full_name,
                    'password'=> $password,
                    'email'=>$email,
                    'phone'=> $phone,
                    'program'=> $program,
                    'dob'=>$dob,
                    'user_type'=>'student',
                ];

                $status = insertUser($users);
//            var_dump($status);

                if($status){

                    $user_data = getUserById($username);
                    $users_data = [
                        'user_id'=>$user_data['id'],
                        'student_name'=>$user_data['full_name'],
                        'student_phone'=> $user_data['phone'],
                        'student_program'=>$user_data['program'],
                        'student_dob'=> $user_data['dob'],
                    ];
                    studentData($users_data);

                    echo "success";
                }else{
                    echo "Please check your required field ?";
                }

            }
        }
    }
?>