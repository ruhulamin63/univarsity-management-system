<?php
    session_start();

    require_once('../models/UserModel.php');

    if(isset($_POST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        //$type = $_REQUEST['type'];
//        var_dump($password);

        if($username !='' && $password !=''){
            $status = validateUser($username, $password);

            if($status){

                if(!empty($_REQUEST['remember'])){
                    setcookie('username', $username, time()+(86400*30), "/");
                    setcookie('password', $password, time()+(86400*30), "/"); // 1 day = 86400
                }else{
                    if(isset($_COOKIE['username'])){
                        setcookie('username');
                    }
                    if(isset($_COOKIE['password'])){
                        setcookie('password');
                    }
                }

                $_SESSION['flag'] = true;

                $data = getUserById($username);
                $_SESSION['current_user']=$data;

                //=====================================================================================
                $_SESSION['user_type']=$data; //global declaration database\
//                var_dump($data);

                if($data['user_type']=="student"){
                    echo "student";
//                    header('location: ../views/students/dashboard.php');

                }if($data['user_type']=="staff"){
                    echo "staff";
//                    header('location: ../views/staffs/staff_dashboard.php');

                }
                //=====================================================================================

            }else{
                echo "Users credential don't match !";
            }
        }else {
            echo "";
        }
    }
?>