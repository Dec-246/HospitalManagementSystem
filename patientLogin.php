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
                    <!-- users (table)== patient  
            //userPassword == patientPassword -->
                    <!-- //userLogin== email -->
                    <div class="LoginForm">
                        <form action="patientCheckLogin.php" method="post">
                            <div>
                                <label for="email">Login:</label>
                                <input type="text" name="email" id="email">

                            </div>
                            <div>
                                <label for="patientPassword">Password:</label>
                                <input type="password" name="patientPassword" id="patientPassword">

                            </div>
                            <div>
                                <input type="submit" value="Login">
                            </div>
                        </form>
                        <p><a href="patientRegister.php">Register</a></p>
                        <p><a href="patientDashboard.php">Not Allowed!</a></p>
                    </div>

                    <!-- Password message box requirement -->
                    <div id="message" class="passwordMessage">
                        <h4>Password must contain:</h4>
                        <p id="letter" class="invalid">A <b>lowercase</b> letters</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letters</p>
                        <p id="number" class="invalid">A <b>number</b> letters</p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b> </p>
                    </div><br>
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

    <!-- password require -->
    <script>
        var myInput = document.getElementById("patientPassword");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // when password input clicked, show message
        myInput.onfocus = function(){
            document.getElementById("message").style.display = "block";
        }

        //when user clicks off password input, hide message
        myInput.onblur = function(){
            document.getElementById("message").style.display = "none";
        }

        //when user starts typing in password input
        myInput.onkeyup =function(){
            //validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if(myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else{
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

             //validate capital letters
             var upperCaseLetters = /[A-Z]/g;
            if(myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else{
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            //validate numbers
            var numbers = /[0-9]/g;
            if(myInput.value.match(numbers)){
                number.classList.remove("invalid");
                number.classList.add("valid");
            }   else{
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            //validate length
            if(myInput.value.length >= 8){
                length.classList.remove("invalid");
                length.classList.add("valid");
            }   else{
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>

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