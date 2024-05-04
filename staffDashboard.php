<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/global.css" type="text/css" />

        <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

        <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

    </head>

    <body>
        <div class="container">
            <div class="navbarContainer">
                <?php
                include("php/includes/staff/navbar.php");
                ?>
            </div>

            <div class="header">
                <?php
                include("php/includes/header.php");
                ?>
            </div>

            <main>

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

                <div class="rowButtons">
                    <div class="staffInfo">
                        <a href="">Personal Info</a>
                    </div>

                    <div class="listOfAssertedPatients">
                        <a href="">Patients</a>
                    </div>
                </div>

                <div class="rowButtons">
                    <div class="staffNotes">
                        <a href="">Notes</a>
                    </div>

                    <div class="staffSchedule">
                        <a href="staffSchedule.php">Schedule</a>
                    </div>
                </div>

                <div class="rowButtons">
                    <div class="patientLabResults">
                        <a href="">Patient Lab test Results</a>
                    </div>

                    <div class="patientBookings">
                        <a href="">Patient bookings</a>
                    </div>
                </div>




            </main>


        </div>
        <div class="footer">
            <?php
            include("php/includes/footer.php");
            ?>
        </div>
    </body>

</html>