<?php
    session_start();
    require '../Controllers/vaildUsers.php';
?>
<html>
<head>
	<title>Welcome To the Website</title>
</head>
<body>
<b>Welcome To the Website</b>
<table>

        <th><a href="NoticeList.php">Notice</a></th>
        <th></th>
    <th><a href="Course.php">Registration for course</a></th>
        <th></th>
    <th><a href="Grades.php">Grades</a></th>
        <th></th>
   
    <th></th>
    <th></th>
    <th><a href="../Controllers/logout.php">Logout</a></th>
    
    <th rowspan="4" align="right"> Welcome,  
    <?php
        if(isset($_SESSION['user'])){
            print_r($_SESSION['user']['username']);
        }
    ?>
    </th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

</table>
    