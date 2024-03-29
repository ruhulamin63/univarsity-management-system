<?php
    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: ../../controllers/login_check.php');
    }
?>

    <!-- ================================================================ -->

<?php
    $title= "Attendance";
    include('student_head.html');
?>
    </head>
    <body>

    <table border="1px" align="center" width="100%">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="150px" height="50px">
                            <img src="../../asset/company_logo.png" alt="main_logo" width="100%" height="100%">
                        </td>
                        <td align="right" >Logged in as
                            <a href="../../controllers/students/view_student_profile_controller.php">
                                <?php
                                    require_once('../../models/UserModel.php');
                                    $id=$_SESSION['current_user']['username'];
                                    $data = getUserById($id);

                                    echo $data['full_name']
                                ?>
                            </a> |
                            <a href="../../controllers/logout_check.php">Logout</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- new table creating -->
<table  border="1px" align="cen" width="100%">
    <tr>

        <?php
            require_once('../navigator/sideBar.html');
        ?>

        <td colspan="2" align="center">
            <table border="1px" align="center">
                <tr>
                    <td align="center" colspan="11">
                        <h2>Attendance</h2>
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Student Name</th>
                </tr>

                <?php
                require_once('../../models/studentInfoModel.php');

                $result = getStudentInfo($_SESSION['current_user']['id']);
//                print_r($result);

//                foreach ($result as $key => $value) {
//                    $student_id = getStudentAttendance($value['id']);
//                }

                $student_id = getStudentAttendance();

                if(count($student_id)>0){
                    foreach ($student_id as $key => $value) {
                        echo "
                                        <tr>
                                            <td>{$value['date']}</td>
                                            <td>{$value['status']}</td>
                                    ";

                        $student_name = getStudentName($value['student_id']);
                        echo "
                                        <td>{$student_name['student_name']}</td>
                                    </tr>
                                ";
                    }
                }
                ?>

            </table>
        </td>
    </tr>
<?php
    include('../footer.html');
?>