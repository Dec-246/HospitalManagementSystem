<?php
include ("config.php");

    $sql = "SELECT * FROM patient";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){ //mysqli_fetch_assoc // fetches next available row within our object 
            echo $row["ID"] . "<br>";
            echo $row["email"] . "<br>";
            echo $row["patientPassword"] . "<br>";

        }; 
    }
    else{
        echo "No user found";
    }

    

    mysqli_close ($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create patient account</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

</head>

<body>
    <div class="">

        <div class="navbarContainer">
            <?php
            include("php/includes/admin/navbar.php");
            ?>
        </div>

        <div class="header">
            <?php
            include("php/includes/header.php");
            ?>
        </div>
        <main>

            <!-- code for scroll back to top button -->
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

            <!--form action= php/admin/adminCreateStaffSQL.php -->

            <div class="pLoginTitle">
                <h2>Patient Log-in</h2>
            </div>

            <form action="testLoginPatient.php" method="POST" class="patientLogin">
                <div class="patientLoginForm">
                    <label for="username">Username:</label> <br>
                    <input type="text" id="email" name="email" required><br>
                </div>

                <div class="patientLoginForm">
                    <label for="password">password:</label> <br>
                    <input type="password" id="patientPassword" name="patientPassword" required><br><br>
                </div>

                <div class="patientSignupFormButton">
                    <input type="submit" value="Log-in" name="submit"><br><br>
                </div>

                <a href="patientSignup.php" class="patientSignup">Sign-up</a>
            </form>



        




            <div class="footer">
                <?php
                include("php/includes/footer.php");
                ?>
            </div>
</body>

</html>