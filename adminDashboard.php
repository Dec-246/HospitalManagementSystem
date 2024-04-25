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
            include("php/includes/admin/navbar.php");
            ?>
        </div>

        <div class="header">
            <?php
            include("php/includes/header.php");
            ?>
        </div>

        <main>

            <div class="rowButtons">
                <div class="registeredDoctors">
                    <a href="adminViewStaff.php">Registered doctors</a>
                </div>

                <div class="assignDocToPatient">
                    <a href="adminViewStaff.php">Assign doctor to patient</a>
                </div>
            </div>

            <div class="rowButtons">
                <div class="upcomingAppointments">
                    <a href="adminViewStaff.php">Upcoming patient appointments</a>
                </div>

                <div class="patientData">
                    <a href="adminViewStaff.php">Patient Data</a>
                </div>
            </div>

            <div class="rowButtons">
                <div class="upcomingAppointments">
                    <a href="adminViewStaff.php">Upcoming patient appointments</a>
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