<?php
    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: ../../controllers/login_check.php');
    }
?>

    <!-- ================================================================ -->

<?php
    $title= "View Student";
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
        <td width="200px" height="425px"><h2>Main Menu</h2>
            <hr>

            <details>
                <summary><a href="student_dashboard.php">Dashboard</a></summary>
            </details>

            <details>
                <summary><a href="student_notification.php">Notify</a></summary>
            </details>

            <details>
                <summary><b>Grade Report</b></summary>
                <details>
                    <summary><a href="student_grades.php">Grade Info</a></summary>
                </details>
            </details>

            <details>
                <summary><b>Portal</b></summary>
                <details>
                    <summary><a href="view_student_profile.php">Student Info</a></summary>
                </details>
                <details>
                    <summary><a href="student_attendance.php">Attendance</a></summary>
                </details>
                <details>
                    <summary><a href="student_classroom.php">Classroom</a></summary>
                </details>
            </details>

            <details>
                <summary><b>Setting</b></summary>
                <details>
                    <summary><a href="../../controllers/students/view_student_profile_controller.php">View Profile</a></summary>
                </details>
                <details>
                    <summary><a href="../../controllers/students/view_student_profile_controller.php">Edit Profile</a></summary>
                </details>
                <details>
                    <summary><a href="change_student_password.php">Change Password</a></summary>
                </details>
                <details>
                    <summary><a href="../../controllers/logout_check.php">Logout</a></summary>
                </details>
            </details>
        </td>

        <td colspan="2" align="center">
            <table border="1px" align="center">
                <tr>
                    <td align="center" colspan="11">
                        <h2>My Information</h2>
                    </td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Program</th>
                    <th>DOB</th>
                    <th>CGPA</th>
                    <th>Grade</th>
                    <th>Passing Year</th>
                </tr>

                <?php
                    require_once('../../models/studentInfoModel.php');

                    $result = getStudentInfo($_SESSION['current_user']['id']);

//                    print_r($result);

                    if(count($result)>0){
                        foreach ($result as $key => $value) {
                            echo "
                                        <tr>
                                            <td>{$value['student_name']}</td>
                                            <td>{$value['student_phone']}</td>
                                            <td>{$value['student_program']}</td>
                                            <td>{$value['student_dob']}</td>
                                            <td>{$value['student_cgpa']}</td>
                                            <td>{$value['student_grade']}</td>
                                            <td>{$value['student_passing_year']}</td>
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