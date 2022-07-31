<?php
    session_start();

    require_once('../models/UserModel.php');

    if(isset($_POST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        //$type = $_REQUEST['type'];
//        var_dump($password);

        $status = validateUser($username, $password);



        if($status){

            if(!empty($_REQUEST['remember'])){
                setrawcookie('username', $username, time()+(86400*30));
                setrawcookie('password', $password, time()+(86400*30)); // 1 day = 86400
            }else{
                if(isset($_COOKIE['username'])){
                    setrawcookie('username','');
                }
                if(isset($_COOKIE['password'])){
                    setrawcookie('password','');
                }
            }

            $_SESSION['flag'] = true;

            $data = getUserById($username);
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
            echo "Users credential don't match !";
        }
    }
?>