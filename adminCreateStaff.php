<?php

session_start();



//create_user("Hello", "hello");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create employee account</title>
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

            <form action="php/admin/adminCreateStaffSQL.php" method="post" >
                <div class="createStaffForm">
                    <input type="text" name="firstName" placeholder="firstName"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="lastName" placeholder="lastName"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="phoneNumber" placeholder="phoneNumber"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="email" placeholder="email"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="gender" placeholder="gender"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="staffRole" placeholder="staffRole"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="salary" placeholder="salary"><br>
                </div>

                <div class="createStaffForm">
                    <input type="date" name="hireDate" placeholder="hireDate"><br>
                </div>

                <div class="createStaffForm">
                    <input type="text" name="department_id" placeholder="department_id"><br>
                </div>

                <div class="createStaffForm">
                    <input type="password" name="password" placeholder="password"><br><br>
                </div>

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