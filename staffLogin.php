<?php
// add includes to sessions
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

                    <div class="LoginTitle">
                        <h1>Login</h1>
                    </div>


                    <div class="loginError">
                        <br><br><?php
                                if (isset($_SESSION['loginError'])) {
                                    echo "<p class=\"error\">Invalid Login Details</p>";
                                }
                                ?>
                    </div>
                
                    <div class="LoginForm">
                        <form action="staffCheckLogin.php" method="post">
                            <div>
                                <label for="email">Login:</label>
                                <input type="text" name="email" id="email">

                            </div>
                            <div>
                                <label for="patientPassword">Password:</label>
                                <input type="text" name="staffPassword" id="staffPassword">

                            </div>
                            <div>
                                <input type="submit" value="Login">
                            </div>
                        </form>
                        <!-- <p><a href="patientRegister.php">Register</a></p> -->
                        <p><a href="patientDashboard.php">Not Allowed!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    // debugging include
    // remove in productions
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