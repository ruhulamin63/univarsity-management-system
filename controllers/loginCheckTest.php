<?php
    session_start();

    require_once('../models/UserModel.php');

    if(isset($_POST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
//        $user_type = $_REQUEST['user_type'];
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





                //=================================end json file===============================

//                $_SESSION['user_type']=$data; //global declaration database\
//                var_dump($data);

                if($data['user_type']=="student"){
                    echo "student";
//                    header('location: ../views/students/dashboard.php');

                }else if($data['user_type']=="staff"){
                    echo "staff";
//                    header('location: ../views/staffs/staff_dashboard.php');

                }else{
                    echo "please correct your user type ?";
                }

                //===================================json data show==================================================
                $myfile = fopen('../models/login_users.json', 'r');
                $json_data = fread($myfile, filesize('../models/login_users.json'));
                fclose($myfile);

                $decode = json_decode($json_data,true);

                $login_user = [
                    'username'=>$username,
                    'password'=>$password,
                    'user_type'=>$data['user_type'],
                    'logged_in'=>date('Y-m-d H:i:s'),
                ];

                $decode[] = $login_user;

                $curr_encode=json_encode($decode);

                $myfile = fopen('../models/login_users.json', 'w');
                fwrite($myfile, $curr_encode);
                fclose($myfile);
                //==========================end json data===================================

            }else{
                echo "Users credential don't match !";
            }
        }else {
            echo "";
        }
    }
?>