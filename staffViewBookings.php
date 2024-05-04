<?php
ini_set("display_errors",1);
include("config.php"); // use the config file instead of db_connect
include_once('adminViewAppointmentSQL.php');
?>
<!DOCTYPE html>
<html lang="en">

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
                    include("php/includes/staff/navbar.php");
                ?>
            </div>

            <div class="header">
                <?php
                    include("php/includes/header.php");
                ?>
            </div>




            <div class="container pb-5">
                <h2>Patient bookings</h2><br>
            </div>

            <div class="row">
                <div class="col-11">
                    <table class="table table-striped">

                        <thead class="table-dark">
                            <td>Appointment ID</td>
                            <td>Appointment Date/Time</td>
                            <td>Subject</td>
                            <td>Patient name</td>
                            <td>Staff name</td>
                        </thead>

                        <?php for ($i = 0; $i < count($appointment); $i++) : ?>

                            <tr>
                                <td><?php echo $appointment[$i]['ID'] ?></td>
                                <td><?php echo $appointment[$i]['dateTime'] ?></td>
                                <td><?php echo $appointment[$i]['subject'] ?></td>
                                <td><?php echo $appointment[$i]['patientName'] ?></td>
                                <td><?php echo $appointment[$i]['staffName'] ?></td>


                                <td><a href="updateAppointment.php?ID=<?php echo $appointment[$i]['ID']; ?>">Update</a></td>			
                                
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
            </div>
        </div>
    
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
    </body>
</html>