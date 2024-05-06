<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff notes</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 620px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 621px)" />


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

        <div class="container pb-5">
            <h2></h2><br>
        </div>


        <div class="DocNotesTitle">
            <h1>Doctor's notes:</h1>
        </div><br><br><br>

        <div class="DocNoteForm">

            <div class="DocNotesDate">
                <div class="noteDate">
                    <p>Date:</p>
                </div>
                <div class="NoteDate">
                    <p>06/05/2024</p>
                </div>
            </div><br><Br><br>
    
            <div class="DocNotesTime">
                <div class="noteTime">
                    <p>Time:</p>
                </div>
                <div class="NoteTime">
                    <p>15:03</p>
                </div>
            </div><br><Br><br>
    
            <div class="DocNote">
                <div class="note">
                    <p>Note:</p>
                </div>
                <div class="Note">
                    <p>Patient injured on upper left leg, may need to be referred to hospital.</p>
                </div>
            </div><br><Br><br>
    
            <div class="actions">
                <div class="actionsTaken">
                    <p>Actions to be taken:</p>
                </div>
                <div class="Note">
                    <p>I am advising the patient to rest for the next 2 weeks. If pain continues, he needs to go to the hospital immediately.</p>
                </div>
            </div><br><Br><br>
        </div><br><br>


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

</body>

</html>