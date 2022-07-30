<?php
    session_start();

    require_once('../models/UserModel.php');

    if(isset($_POST['submit'])){

        $user_id = $_REQUEST['user_id'];
        $password = $_REQUEST['password'];
        //$type = $_REQUEST['type'];
        var_dump($password);
        $status = validateUser($user_id, $password);



        if($status){

            if(!empty($_REQUEST['remember'])){
                setcookie('user_id', $user_id, time()+(86400*30));
                setcookie('password', $password, time()+(86400*30)); // 1 day = 86400
            }else{
                if(isset($_COOKIE['user_id'])){
                    setcookie('user_id','');
                }
                if(isset($_COOKIE['password'])){
                    setcookie('password','');
                }
            }

            $_SESSION['flag'] = true;

            $data = getUserById($user_id);
            $_SESSION['current_user']=$data;

            echo "success";

    //=====================================================================================
            /*$_SESSION['user_type']=$user; //global declaration database

            if($user['user']=="Admin"){
                header('location: ../view/admin_home.php');
            }else{
                header('location: ../view/user_home.php');
            }*/
    //=====================================================================================
        }else{
            echo "Invalid users credential don't match !";
        }
    }
?>