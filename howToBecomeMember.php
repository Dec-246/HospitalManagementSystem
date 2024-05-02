<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to become a member</title>
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

            <div class="memberTitle">
                <h1><b>How to become a member with us</b></h1>
            </div>
            

            <div class="memberIntro">
                <p>
                    we have created this page to show how you could possibly become a member of our 
                    hospital if you are not already. <br><br>

                    So it is a very simple and straight-forward process. You simply just click <a href="patientSignup.php"> *HERE*</a> 
                    and you will be taken to our sign-up page. After you have created an account with us,
                    your details will be entered into our database, which means you would be a member immediately. <br><br>

                    After becoming a member, this means that you will become custom to the services and help that we offer.
                    This is as well as gaining access to immiate care and attention if you need to be seen to urgently. <br><br>

                    Our hospital offers a 5* service and a high quality treatment compared to other hospital services out there.

                </p>
            </div><br><br>

        </main>
    </div>

    <div class="footer">
        <?php
        include("php/includes/footer.php");
        ?>
    </div>
</body>

</html>