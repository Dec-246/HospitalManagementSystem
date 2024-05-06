    <?php

    // ini_set("display_errors",1);
session_start();

    require_once('php/db_functions/db_connect.php');

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patient sign-up</title>
        <link rel="stylesheet" href="css/global.css" type="text/css"/>

        <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

        <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

    </head>

    <body>
        
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

        <!-- scroll to top button -->
        <script>
            // Get button
            let mybutton = document.getElementById("myBtn");
        
            // When the user scrolls down by 20px from the top of the page, show 'scroll back to top' button
            window.onscroll = function() {scrollFunction()};
        
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

        <main>

            <form action="patientSignupSQL.php" method="POST">
                
            <!-- user enters their information to sign up -->
                <div class="patientSignupForm">
                    <label for="firstName">First name:</label> <br>
                    <input type="text" id="firstName" name="firstName" required><br>  
                </div>
                
                <div class="patientSignupForm">
                    <label for="lastName">last name:</label> <br>
                    <input type="text" id="lastName" name="lastName" required><br>  
                </div>
                
                <div class="patientSignupForm">
                    <label for="email">Email:</label> <br>
                    <input type="email" id="email" name="email" required><br> 
                </div>
                
                <div class="patientSignupForm">
                    <label for="phoneNumber">Phone number:</label> <br>
                    <input type="text" id="phoneNumber" name="phoneNumber" required><br>  
                </div>
                
                <div class="patientSignupForm">
                    <label for="gender">Gender:</label> <br>
                    <input type="text" id="gender" name="gender" required><br>    
                </div>
                
                <div class="patientSignupForm">
                    <label for="dateOfBirth">Date of birth:</label> <br>
                    <input type="date" id="dateOfBirth" name="dateOfBirth" required><br> 
                </div>

                <div class="patientSignupForm">
                    <label for="postCode">Post code:</label> <br>
                    <input type="char" id="postCode" name="postCode" required><br>   
                </div>
                
                <div class="patientSignupForm">
                    <label for="address_">Address:</label> <br>
                    <input type="varchar" id="address_" name="address_" required><br>    
                </div>

                <div class="patientSignupForm">
                    <label for="password">Password:</label> <br>
                    <input type="password" id="password" name="userPassword" required><br><br>
                </div>
                
                <div class="patientSignupFormButton">
                    <input type="submit" value="Sign-up" name="submit"><br><br>
                </div>
                
                <!-- take user to log in page if they have already got a log-in -->
                <div class="patientSignupForm">
                    <a href="patientLogin.php" >Log-in</a>
                </div>
            </form>
        </main>
        
        <div class="footer">
        <?php
        include("php/includes/footer.php");
        ?>
        </div>
    </body>
</html>