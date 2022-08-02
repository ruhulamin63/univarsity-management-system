<?php
    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: ../../controllers/login_check.php');
    }

    $data=$_SESSION['current_user'];
    //var_dump($data);
?>

    <!-- ============================================================ -->

<?php
$title= "Dashboard";
include('staff_head.html');
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
                            <a href="view_student_profile.php">
                                <?php
                                echo $data['full_name'];
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
                <summary><a href="staff_dashboard.php">Dashboard</a></summary>
            </details>

            <!--            <details>-->
            <!--                <summary><b>Portal</b></summary>-->
            <!--                <details>-->
            <!--                    <summary><a href="create_leave_request.php">Create Leave Request</a></summary>-->
            <!--                </details>-->
            <!--                <details>-->
            <!--                    <summary><a href="create_travel_request.php">Create Travel Request</a></summary>-->
            <!--                </details>-->
            <!--                <details>-->
            <!--                    <summary><a href="fixing_interview_approval.php">Fixing Interview</a></summary>-->
            <!--                </details>-->
            <!--            </details>-->
            <!---->
            <!--            <details>-->
            <!--                <summary><b>Screening & Approval</b></summary>-->
            <!--                <details>-->
            <!--                    <summary><a href="leave_approval.php">Leave Approval</a></summary>-->
            <!--                </details>-->
            <!--                <details>-->
            <!--                    <summary><a href="travel_approval.php">Travel Approval</a></summary>-->
            <!--                </details>-->
            <!--                <details>-->
            <!--                    <summary><a href="performance_approval.php">Performance Overview</a></summary>-->
            <!--                </details>-->
            <!--            </details>-->
            <!---->
            <!--            <details>-->
            <!--                <summary><b>Requirement</b></summary>-->
            <!--                <details>-->
            <!--                    <summary><a href="add_job.php">Add Job Titles</a></summary>-->
            <!--                </details>-->
            <!--                <details>-->
            <!--                    <summary><a href="view_job.php">View Job Titles</a></summary>-->
            <!--                </details>-->
            <!--                <details>-->
            <!--                    <summary><a href="add_job_vacancy.php">Add Job Vacancy</a></summary>-->
            <!--                </details>-->
            <!--                <details>-->
            <!--                    <summary><a href="view_job_vacancy.php">View Job Vacancy</a></summary>-->
            <!--                </details>-->
            <!--                <details>-->
            <!--                    <summary><a href="online_app.php">Online Application</a></summary>-->
            <!--                </details>-->
            <!--                <details>-->
            <!--                    <summary><a href="fixing_interview.php">Fixing Interview Online</a></summary>-->
            <!--                </details>-->
            <!--            </details>-->

            <details>
                <summary><b>Setting</b></summary>
                <details>
                    <summary><a href="view_student_profile.php">View Profile</a></summary>
                </details>
                <details>
                    <summary><a href="edit_student_profile.php">Edit Profile</a></summary>
                </details>
                <details>
                    <summary><a href="change_staff_password.php">Change Password</a></summary>
                </details>
                <details>
                    <summary><a href="../../controllers/logout_check.php">Logout</a></summary>
                </details>
            </details>
        </td>


        <td colspan="2" align="center">
            <h1>Welcome to our staff, <?php echo $data['full_name'];?>
            </h1>
        </td>
    </tr>
<?php
include('../footer.html');
?>