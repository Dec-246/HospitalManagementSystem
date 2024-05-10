<?php
session_start();
    require_once('php/db_functions/db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book appointment</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

</head>

<body>
    <div class="">

        <div class="navbarContainer">
            <?php
            include("php/includes/patient/navbar.php");
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

            <!-- form allows the patients to book appointments -->
            <form class="bookAppointmentForm" action="patientBookAppointmentSQL.php" method="POST" >

                <div class="bookAppointment">
                    <input type="text" name="idPatient" placeholder="Patient ID"><br><br>
                </div><br>

                <div class="bookAppointment">
                    <input type="date" name="dateTime" placeholder="Appointment Date"><br>
                </div><br>

                <div class="bookAppointment">
                    <input type="text" name="subject" placeholder="Subject"><br><br>
                </div><br><br>

                <div class="submitNewStaff">
                    <button type="submit" value="submit">Submit</button>
                </div>
            </form>
        </main>
    </div>

    <div class="footer">
        <?php
        include("php/includes/footer.php");
        ?>
    </div>
</body>

</html>