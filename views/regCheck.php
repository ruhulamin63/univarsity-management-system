
<?php
$title= "Registration";
include('../views/header.html');
?>
<script type="text/javascript" src="../js/registrationScript.js"></script>
</head>
<body>

<table border="1px" align="center" width="100%">
    <tr>
        <td>
            <table width="100%">
                <tr>
                    <td width="150px" height="50px">
                        <img src="../asset/company_logo.png" width="100%" height="100%">
                    </td>
                    <td align="right">
                        <a href="../views/home.html">Home</a> |
                        <a href="login_check.php">Login</a> |
                        <a href="regCheck.php">Registration</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table border="1px" align="center" width="100%">
    <tr>
        <td height="400px">
            <table align="center">
                <tr>
                    <td>
                        <!-- <?php //echo htmlentities($_SERVER['PHP_SELF']); ?> -->

                        <fieldset>
                            <legend>REGISTRATION</legend>
                            <table>
                                <tr>
                                    <td colspan="2" align="center">
                                        <h2 align="center">Sign Up</h2>
                                        <img src="../asset/your_logo.png">
                                        <hr>

                                        <h2 align="center" id="txtHint"></h2>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Student ID</td>
                                    <td>
                                        <input type="text" name="student_id" id="student_id" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="u_id" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <input type="text" name="name" id="name" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="n" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Password</td>
                                    <td>
                                        <input type="text" name="password" id="password" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="p" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Confirm Password</td>
                                    <td>
                                        <input type="text" name="confpass" id="confpass" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="cp" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Mobile Number</td>
                                    <td>
                                        <input type="text" name="phone" value="" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="pn" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="email" name="email" id="email" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="e" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Address</td>
                                    <td>
                                        <textarea cols="22" name="address" id="address"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="a" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <input type="radio"  id="gender" value="Male">Male
                                        <input type="radio"  id="gender" value="Female">Female
                                        <input type="radio"  id="gender" value="Others">Others
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="g" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Program</td>
                                    <td>
                                        <select name="program" id="program">
                                            <option value="">-Select-</option>
                                            <option value="CSE">Bsc in CSE</option>
                                            <option value="EEE">Bsc in EEE</option>
                                            <option value="ENG">Bsc in ENG</option>
                                            <option value="BBA">BBA</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="pro" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Blood Group</td>
                                    <td>
                                        <select name="blood" id="blood">
                                            <option value="">-Select-</option>
                                            <option value="A+">A+</option>
                                            <option value="B+">B+</option>
                                            <option value="AB+">AB+</option>
                                            <option value="O+">O+</option>
                                            <option value="A-">A-</option>
                                            <option value="B-">B-</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="bg" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Date of Birth</td>
                                    <td>
                                        <input type="date" name="dob" id="dob" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span id="d" class="user-error"></span>
                                    </td>
                                </tr>

                                <tr align="center">
                                    <td colspan="2">
                                        <hr><br>
                                        <input type="submit" name="submit" id="submit" value="Sign Up" onclick="regCheckValidation()"><br><br>
                                        <span>Already SignUp ?</span><a href="login_check.php">Login</a>
                                    </td>
                                    <!-- <td align="right">
                                        <a href="login_check.php">Back</a>
                                    </td> -->
                                </tr>
                            </table>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

<?php
include('../views/footer.html');
?>