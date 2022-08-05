<?php

    require_once('db.php');

    //======================================================================================

    function getStudentNotify(){

        $conn = getConnection();
        $sql = "select * from notices";
        $result = mysqli_query($conn, $sql);

        $users =[];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
        return $users;
    }

?>