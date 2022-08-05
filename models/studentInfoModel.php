<?php

require_once('db.php');

//======================================================================================

function getStudentInfo($id){

    $conn = getConnection();
    $sql = "select * from students where user_id='{$id}'";
    $result = mysqli_query($conn, $sql);

    $users =[];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }
    return $users;
}

//======================================================================================

function getStudentAttendance($student_id){

    $conn = getConnection();
    $sql = "select * from attendance where student_id='{$student_id}'";
    $result = mysqli_query($conn, $sql);

    $users =[];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }
//    var_dump($users);
    return $users;
}

//======================================================================================

function getGradeInfo($id){

    $conn = getConnection();
    $sql = "select * from grades where id={$id}";
    $result = mysqli_query($conn, $sql);

    $users =[];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }
//    var_dump($users);
    return $users;
}

//======================================================================================

function getTeacherInfo($id){

    $conn = getConnection();
    $sql = "select * from teachers where id={$id}";
    $result = mysqli_query($conn, $sql);

    $users =[];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }
//    var_dump($users);
    return $users;
}

//======================================================================================

function getStudentClassroom($teacher_id){

    $conn = getConnection();
    $sql = "select * from classrooms where teacher_id={$teacher_id}";
    $result = mysqli_query($conn, $sql);

    $users =[];

    while($row = mysqli_fetch_assoc($result)){
        array_push($users, $row);
    }
//    var_dump($result);
    return $users;
}

?>