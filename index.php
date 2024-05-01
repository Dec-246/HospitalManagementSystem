<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/global.css" type="text/css" />

    <link rel="stylesheet" href="css/mobile.css" type="text/css" media="only screen and (max-width : 607px)" />

    <link rel="stylesheet" href="css/desktop.css" type="text/css" media="only screen and (min-width : 608px)" />

    
</head>

<body>
    <div class="">
        

        <div class="navbarContainer">
            <?php
            include("php/includes/navbar.php");
            ?>
        </div>

        <div class="homepageImage">
            <img alt="User Icon" src="img/homeScreen.webp">
        </div>

        
        <div class="header">
            <?php
            include("php/includes/header.php");
            ?>
        </div>
        
        <!--pb= padding body -->
        <main role="main" class="pb-5">
            
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
            
            <div class="emergencyContactHome">
                <p>If you need urgent attention, please call 999 IMMEDIATELY</p>
                <li>Emergency services: <a href="tel: --999"> 999</a></li>
            </div>
            
            <div class=homePageTitle>
                <h1>Welcome to our official website for Cantor Hospital Care</h1>
            </div>

            <div class=homePageIntro>

                <p>On this website you will find all information based on our Hospital and the service that we provide.
                    Within the menu, you will be able to either log-in or sign-up for an account in order to become a registered patient
                    at our hospital. We hope you find all the answers that you were looking for.
                </p>
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