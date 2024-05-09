<!-- staff register -->

<?php
ini_set("display_errors", 1);

require('patientSessions.php');
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View staff</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 620px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 621px)" />


</head>

<body>
    <div class="">

        <div class="navbarContainer">
            <?php
            include("php/includes/navbar.php");
            ?>
        </div>

        <div class="header">
            <?php
            include("php/includes/header.php");
            ?>
        </div>

        <div class="container">
            <div class="loginContainer">
                <div class="login">

                    <Br>
                    <div class="LoginTitle">
                        <h1>Registration</h1>
                    </div><br><br>

                    <div class="loginError">
                        <?php
                        // Error messages
                        if (isset($_SESSION['regError'])) {
                            switch ($_SESSION['regError']) {
                                case 1:
                                    echo "<p class=\"error\">Invalid Email Address</p>";
                                    break;
                                case 2:
                                    echo "<p class=\"error\">Please confirm your password</p>";
                                    break;
                                case 3:
                                    echo "<p class=\"error\">Already Registered</p>";
                                    break;
                            }
                        }
                        ?>
                    </div>

                    <div class="LoginForm">
                        <form action="adminCreateStaffReplacement.php" method="post">


                            <div class="createStaffForm">
                                <input type="text" name="firstName" placeholder="firstName"><br>
                            </div>

                            <div class="createStaffForm">
                                <input type="text" name="lastName" placeholder="lastName"><br>
                            </div>

                            <div class="createStaffForm">
                                <input type="text" name="phoneNumber" placeholder="phoneNumber"><br>
                            </div>

                            
                            <div class="createStaffForm">
                                <input type="text" name="gender" placeholder="gender"><br>
                            </div>
                            
                            <div class="createStaffForm">
                                <input type="text" name="staffRole" placeholder="staffRole"><br>
                            </div>
                            
                            <div class="createStaffForm">
                                <input type="text" name="salary" placeholder="salary"><br>
                            </div>
                            
                            <div class="createStaffForm">
                                <input type="date" name="hireDate" placeholder="hireDate"><br>
                            </div>
                            
                            <div class="createStaffForm">
                                <input type="text" name="department_id" placeholder="department_id"><br>
                            </div>
                            
                            <div class="createStaffForm">
                                <input type="text" name="email" placeholder="email"><br>
                            </div>

                            <div class="createStaffForm">
                                <input type="password" name="staffPassword" placeholder="password"><br><br>
                            </div>

                            <div class="patientSignupForm">
                                <label for="passwordConfirm">Confirm Password:</label>
                                <input type="password" name="staffPasswordConfirm" id="passwordConfirm">
                            </div><br><br>

                            <div>
                                <input type="submit" value="Register">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    // require('testDebugger.php');
    ?>
    <div class="footer">
        <?php
        include("php/includes/footer.php");
        ?>
    </div>

    <!-- scroll to top button -->
    <script>
        // Get button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down by 20px from the top of the page, show 'scroll back to top' button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When user clicks on 'scroll back to top' button, scroll to top of the webpage
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>

<!--  tester
 Daisy@test.com -->