<?php
    session_start();

    require_once('../../models/UserModel.php');

    if(!isset($_SESSION['flag'])){
        header('location: ../../controllers/login_check.php');
    }

    $data=$_SESSION['current_user'];

    //==============================================================

    if(isset($_POST['submit'])){

        $username=$_REQUEST['username'];
        $full_name=$_REQUEST['full_name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $program=$_REQUEST['program'];
        $dob=$_REQUEST['dob'];

        $users = [
            'username'=>$username,
            'full_name'=>$full_name,
            'email'=>$email,
            'phone'=> $phone,
            'program'=> $program,
            'dob'=>$dob,
        ];

//        var_dump($username);

//        $conn = getConnection();
//        $sql = "update users set username='{$username}', full_name='{$full_name}', email='{$email}', phone='{$phone}', program='{$program}', dob='{$dob}' where username='{$data['username']}'";
//        $result=mysqli_query($conn, $sql);
        updateUser($users, $username);
//        var_dump($sql);

    //==============================================================================

        /*$get_id=$_SESSION['current_user']['username'];
        $id=getUserById($get_id);

        $user = [
                    'username'=>$_POST['username'],
                    'name'=>$_POST['name'],
                    'email'=>$_POST['email'],
                    'gender'=>$_POST['gender'],
                    'phone'=>$_POST['phone'],
                    'address'=>$_POST['address'],
                    'department'=>$_POST['department'],
                    'blood'=>$_POST['blood'],
                    'dob'=>$_POST['dob'],
                ];

        $status=updateUser($user,$id);*/

    //=====================================================================================

    }else{
        $id=$_SESSION['current_user']['username'];
        $data = getUserById($id);

        $username=$data['username'];
        $full_name=$data['full_name'];
        $email=$data['email'];
        $phone=$data['phone'];
        $program=$data['program'];
        $dob=$data['dob'];
    }
?>

    <!-- ================================================================================== -->

<?php
    $title= "Edit Profile";
    include('../header.html');
?>
        <script type="text/javascript" src="../../js/edit_student_profile.js"></script>
<!--        <link rel="stylesheet" type="text/css" href="../../css/style.css">-->
    </head>
    <body>

    <table border="1px" align="center" width="100%">
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="200px" height="60px"><img src="../../asset/company_logo.png" width="100%" height="100%"></td>
                        <td align="right" >
                            Logged in as
                            <a href="view_student_profile.php.php">
                                <?php
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

    <table border="1px" align="center" width="100%">
        <tr height="420px">
            <td width="200px" height="425px"><h2>Main Menu</h2>
                <hr>

                <details>
                    <summary><b>Dashboard</b></summary>
                    <details>
                        <summary><a href="dashboard.php">Dashboard</a></summary>
                    </details>
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
                        <summary><a href="view_student_profile.php.php">View Profile</a></summary>
                    </details>
                    <details>
                        <summary><a href="edit_student_profile.php.php">Edit Profile</a></summary>
                    </details>
                    <details>
                        <summary><a href="change_pass_check.php">Change Password</a></summary>
                    </details>
                    <details>
                        <summary><a href="logout_check.php">Logout</a></summary>
                    </details>
                </details>
            </td>

            <!-- ================================================================================================= -->

            <td align="center">
                <table align="center">
                    <tr>
                        <td>
                            <fieldset>
                                <legend>EDIT PROFILE</legend>

                                <h2 id="txtHint"></h2>

                                <table>
                                    <tr>
                                        <td>Username</td>
                                        <td>:
                                            <input type="username" name="username" id="username" value="<?php echo $username;?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>:
                                            <input type="text" name="full_name" id="full_name" value="<?php echo $full_name;?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:
                                            <input type="email" name="email" id="email" value="<?php echo $email;?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Phone</td>
                                        <td>:
                                            <input type="number" name="phone" id="phone" value="<?php echo $phone;?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Program</td>
                                        <td>:

                                            <select name="program" id="program">
                                                <option><?php echo $program;?></option>
                                                <option >B.Sc in CSE</option>
                                                <option>B.Sc in EEE</option>
                                                <option >B.Sc in IPE</option>
                                                <option>BBA</option>
                                                <option >B.Sc in ENG</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>:
                                        <td>Date of Birth</td>
                                        <td>
                                            <input type="date" name="dob" id="dob" value="<?php echo $dob;?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- add line -->
                                        <td>
<!--                                            onclick="editProfileValidation()"-->
                                            <input type="submit" name="edit_btn" id="submit" value="Save" onclick="editProfileValidation()">
                                            <!-- <a href="view_profile_check.php"><span>Back</span></a> -->
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
<?php
include('../footer.html');
?>