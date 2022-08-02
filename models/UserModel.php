<?php

require_once('db.php');

//=======================Validatin for login==================================================
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

function updateUser($user,$username){

    $conn = getConnection();
    $sql = "update users set username='{$user['username']}', name='{$user['full_name']}', email='{$user['email']}', phone='{$user['phone']}', program='{$user['program']}', dob='{$user['dob']}', where username='{$username}'";

//    var_dump($sql);

    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

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