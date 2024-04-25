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
                include("php/includes/navbar.php");
                ?>
            </div>

            <div class="header">
                <?php
                include("php/includes/header.php");
                ?>
            </div>

            <main>

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
                        <a href="">Schedule</a>
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