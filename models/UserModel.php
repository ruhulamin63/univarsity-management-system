<?php

require_once('db.php');

//=======================Validatin for login==================================================
function validateUser($user_id, $password){

    $conn = getConnection();
    $sql = "select * from users where user_id='{$user_id}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row!=0){
        return true;
    }else{
        return false;
    }
}

//======================================================================================

function getUserById($user_id){

    $conn = getConnection();
    $sql = "select * from users where user_id='{$user_id}'";
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
    $sql = "insert into users values('', '{$user['user_id']}', '{$user['full_name']}', '{$user['password']}', '{$user['phone']}', '{$user['email']}', '{$user['address']}', '{$user['gender']}', '{$user['program']}', '{$user['blood']}', '{$user['dob']}', '','{$user['created_at']}','{$user['updated_at']}')";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

//======================================================================================

function updateUser($user,$username){

    $conn = getConnection();
    $sql = "update registration set username='{$user['username']}', name='{$user['name']}', email='{$user['email']}', phone='{$user['phone']}', address='{$user['address']}', gender='{$user['gender']}', department='{$user['department']}', blood='{$user['blood']}', dob='{$user['dob']}', '{$user['usertype']}' where username='{$username}'";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

//======================================================================================

function deleteUser($id){

    $conn = getConnection();
    $sql = "delete from registration where id={$id}";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}
//////////////////////////////////////////////////////////////////////



//==========================Start Online Application=====================================

function OnlineApplicatinInsertData($user){

    $conn = getConnection();
    $sql = "insert into online_application values('', '{$user['name']}', '{$user['email']}', '{$user['contract']}', '{$user['experience']}', '{$user['location']}', '{$user['type']}', '{$user['date']}', '{$user['comment']}')";

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

//--------------------------------End Online Application--------------------------------------------

?>