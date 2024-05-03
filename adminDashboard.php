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

            <section>
                <div class="adminDashboard">
                    <div class="ADcolour">
                        <a href="adminViewStaff.php">Registered doctors</a>
                    </div><br><Br>
    
                    <div class="ADcolour">
                        <a href="">Assign doctor to patient</a>
                    </div><br><br>
                </div>
            </section>


            <section>
                <div class="adminDashboard">
                    <div class="ADcolour">
                        <a href="adminViewPatients.php">Patient Data</a>
                    </div><br><Br>
                
                    <div class="ADcolour">
                        <a href="adminViewAppointment.php">Upcoming patient appointments</a>
                    </div>
                
                </div>
            </section><br><br>
            

            <section>
                <div class="adminDashboardBelow">
                    <div class="ADcolour">
                        <a href="adminCreateStaff.php">Register new staff member</a>
                    </div>
                </div>
            </section>
                


        </main>

        
    </div>
    <div class="footer">
        <?php
        include("php/includes/footer.php");
        ?>
    </div>
</body>

</html>