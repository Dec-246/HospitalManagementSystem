<?php
 //ini_set("display_errors",1); //1= true // 0= false
include("config.php"); // use the config file instead of db_connect
include_once('adminViewPatientsSQL.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View patients</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 620px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 621px)" />

    
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




            <div class="container pb-5">
                <h2>List of Patients</h2><br>
            </div>

            <div class="row">
                <div class="col-11">
                    <table class="table table-striped">

                        <thead class="table-dark">
                            <td>Patient ID</td>
                            <td>Patient Name</td>
                            <td>Contact</td>
                            <td>Address</td>
                            <td>Asserted Doctor</td>
                            <td>Date of Birth</td>
                            <td>Gender</td>
                        </thead>

                        <?php for ($i = 0; $i < count($patient); $i++) : ?>

                            <tr>
                                <!-- code below echos the data from the patient table into a grid 
                                on the admins 'view patient page -->
                                <td><?php echo $patient[$i]['ID'] ?></td>
                                <td><?php echo $patient[$i]['Name_'] ?></td>
                                <td><?php echo $patient[$i]['Contact'] ?></td>
                                <td><?php echo $patient[$i]['Address_'] ?></td>
                                <td><?php echo $patient[$i]['assertedDoctor'] ?></td>
                                <td><?php echo $patient[$i]['dateOfBirth'] ?></td>
                                <td><?php echo $patient[$i]['gender'] ?></td>

                                <td><a href="adminUpdatePatient.php?ID=<?php echo $patient[$i]['ID']; ?>">Update</a></td>			
                                
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