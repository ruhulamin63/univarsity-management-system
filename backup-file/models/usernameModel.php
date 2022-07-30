<?php

require_once('../models/db.php');

function UserNameQuery($user_id){

    $conn = getConnection();
    $sql = "select * from users where user_id='{$user_id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    return $row;
}
?>