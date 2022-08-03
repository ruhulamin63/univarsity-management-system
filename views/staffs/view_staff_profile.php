<?php

    require_once('../../models/UserModel.php');
    //    this file from controllers (view_profile_controllers.php)
    //    require_once('../../controllers/view_student_profile_controller.php');


    session_start();

    if (!isset($_SESSION['flag'])) {
        header('location: login_check.php');
    }


    $id = $_SESSION['current_user']['username'];
    $data = getUserById($id);

    $username = $data['username'];
    $full_name = $data['full_name'];
    $email = $data['email'];
    //    $gender=$data['gender'];
    $phone = $data['phone'];
    //    $address=$data['address'];
    $program = $data['program'];
    //    $blood=$data['blood'];
    $dob = $data['dob'];

    //==================================================

?>

    <!-- ========================================================= -->

<?php
    $title= "View Profile";
    include('../header.html');
?>
    <script type="text/javascript" src="../../js/view_staff_profile.js"></script>
    </head>

    <body>

    <table border="1px" align="center" width="100%">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="200px" height="80px">
                            <img src="../../asset/company_logo.png" width="100%" height="100%">
                        </td>
                        <td align="right" >
                            Logged in as
                            <a href="view_staff_profile.php">
                                <?php

                                    $id=$_SESSION['current_user']['username'];
                                    $data = getUserById($id);
                                    echo $data['full_name'];
                                ?>
                            </a> |
                            <a href="../../controllers/logout_check.php"> Logout </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- creating new table -->
    <table border="1px" align="center" width="100%">
        <tr>
            <td width="200px" height="425px"><h2>Main Menu</h2>
                <hr>

                <details>
                    <summary><a href="staff_dashboard.php">Dashboard</a></summary>
                </details>

                <!--                <details>-->
                <!--                    <summary><b>Portal</b></summary>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/create_leave_request.php">Create Leave Request</a></summary>-->
                <!--                    </details>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/create_travel_request.php">Create Travel Request</a></summary>-->
                <!--                    </details>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/fixing_interview_approval.php">Fixing Interview</a></summary>-->
                <!--                    </details>-->
                <!--                </details>-->
                <!---->
                <!--                <details>-->
                <!--                    <summary><b>Screening & Approval</b></summary>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/leave_approval.php">Leave Approval</a></summary>-->
                <!--                    </details>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/travel_approval.php">Travel Approval</a></summary>-->
                <!--                    </details>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/performance_approval.php">Performance Overview</a></summary>-->
                <!--                    </details>-->
                <!--                </details>-->
                <!---->
                <!--                <details>-->
                <!--                    <summary><b>Requirement</b></summary>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/add_job.php">Add Job Titles</a></summary>-->
                <!--                    </details>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/view_job.php">View Job Titles</a></summary>-->
                <!--                    </details>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/add_job_vacancy.php">Add Job Vacancy</a></summary>-->
                <!--                    </details>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/view_job_vacancy.php">View Job Vacancy</a></summary>-->
                <!--                    </details>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/online_app.php">Online Application</a></summary>-->
                <!--                    </details>-->
                <!--                    <details>-->
                <!--                        <summary><a href="../view/fixing_interview.php">Fixing Interview Online</a></summary>-->
                <!--                    </details>-->
                <!--                </details>-->

                <details>
                    <summary><b>Setting</b></summary>
                    <details>
                        <summary><a href="view_staff_profile.php">View Profile</a></summary>
                    </details>
                    <details>
                        <summary><a href="edit_staff_profile.php">Edit Profile</a></summary>
                    </details>
                    <details>
                        <summary><a href="change_staff_password.php">Change Password</a></summary>
                    </details>
                    <details>
                        <summary><a href="../../controllers/logout_check.php">Logout</a></summary>
                    </details>
                </details>
            </td>

            <!-- ==================================================================================================-->
            <td align="center">
                <table>
                    <tr>
                        <td>
                            <form onsubmit="return viewProfileValidation()">
                                <fieldset>
                                    <legend>PROFILE</legend>
                                    <table align="center">
                                        <tr>
                                            <td>Username:</td>
                                            <td>
                                                <?php echo $username; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Full Name:</td>
                                            <td>
                                                <?php echo $full_name; ?>
                                            </td>

                                            <form method="post" action="staff_profile_pic.php" enctype="multipart/form-data">
                                                <td rowspan="4" align="center">
                                                    <?php
                                                    //require_once('../model/db.php');
                                                    require_once('../../models/imageModel.php');

                                                    /*$conn = getConnection();
                                                    $sql = "select * from user_image where user";
                                                    $result = mysqli_query($conn, $sql);
                                                    $row = mysqli_fetch_assoc($result);*/

                                                    $result = getImageById($username);
                                                    $row = mysqli_fetch_assoc($result);

                                                    if($row>0){
                                                        ?>
                                                            <img src="<?php echo "{$row['image']}"; ?>" width="200px" height="200px"><br>
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <img src="../../asset/user.png" width="100px" height="100px"><br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <a href="staff_profile_pic.php">Change</a>
                                                </td>
                                            </form>
                                        </tr>

                                        <tr>
                                            <td>Mobile Phone:</td>
                                            <td>
                                                <?php echo $phone; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Date of Birth:</td>
                                            <td>
                                                <?php echo $dob; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="edit_staff_profile.php">Edit Profile</a></td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
<?php
    include('../footer.html');
?>