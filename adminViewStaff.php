<?php
// ini_set("display_errors",1); //1= true // 0= false
include("config.php"); // use the config file instead of db_connect
include_once('adminViewStaffSQL.php');
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
                    include("php/includes/admin/navbar.php");
                ?>
            </div>

            <div class="header">
                <?php
                    include("php/includes/header.php");
                ?>
            </div>




            <div class="container pb-5">
                <h2>List of Employees</h2><br>
            </div>

            <div class="row">
                <div class="col-11">
                    <table class="table table-striped">

                        <thead class="table-dark">
                            <td>Employee ID</td>
                            <td>Employee Name</td>
                            <td>Contact</td>
                            <td>Staff role</td>
                            <td>Salary</td>
                            <td>Hire date</td>
                        </thead>

                        <?php for ($i = 0; $i < count($staff); $i++) : ?>

                            <tr>
                                <!-- code below echos the data from the staff table into a grid 
                                on the admins 'view staff page -->
                                <td><?php echo $staff[$i]['ID'] ?></td>
                                <td><?php echo $staff[$i]['Name'] ?></td>
                                <td><?php echo $staff[$i]['Contact'] ?></td>
                                <td><?php echo $staff[$i]['staffRole'] ?></td>
                                <td><?php echo $staff[$i]['salary'] ?></td>
                                <td><?php echo $staff[$i]['hireDate'] ?></td>

                                <td><a href="updateStaff.php?ID=<?php echo $staff[$i]['ID']; ?>">Update</a></td>			
                                
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
