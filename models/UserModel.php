<?php

require_once('db.php');

//=======================Validation for login==================================================
function validateUser($username, $password){

    $conn = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row!=0){
        return true;
    }else{
        return false;
    }
}

//===================================create student data=======================
function studentData($data){
    $conn = getConnection();
    $sql = "insert into students values('', '{$data['user_id']}', '{$data['student_name']}', '{$data['student_phone']}', '{$data['student_program']}', '{$data['student_dob']}','', '', '')";
    $result = mysqli_query($conn, $sql);
//    $row = mysqli_fetch_assoc($result);

//    if($row!=0){
//        return true;
//    }else{
//        return false;
//    }
    return $result;
}
//===================================end student data=======================

//======================================================================================

function getUserById($username){

    $conn = getConnection();
    $sql = "select * from users where username='{$username}'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}

//======================================================================================

function getAllUser(){

    $conn = getConnection();
    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);
    $users =[];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }
    return $users;
}

//======================================================================================

function insertUser($user){

    $conn = getConnection();
    $sql = "insert into users values('', '{$user['username']}', '{$user['full_name']}', '{$user['password']}', '{$user['email']}', '{$user['phone']}', '{$user['program']}', '{$user['dob']}', '{$user['user_type']}', '')";

//    var_dump(mysqli_query($conn, $sql));
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

    //======================================================================================

    //function updateUser($user,$username){
    //
    //    $conn = getConnection();
    //    $sql = "update users set username='{$user['username']}', name='{$user['full_name']}', email='{$user['email']}', phone='{$user['phone']}', program='{$user['program']}', dob='{$user['dob']}', where username='{$username}'";
    //
    ////    var_dump($sql);
    //
    //    if(mysqli_query($conn, $sql)){
    //        return true;
    //    }else{
    //        return false;
    //    }
    //}

    //======================================================================================

    function deleteUser($id){

        $conn = getConnection();
        $sql = "delete from users where id={$id}";

        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }
?>