<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where to find us!</title>
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

            <div class="location">
                <h1>
                    Where are we based?
                </h1><br><br>

                <p><b>
                        Below is an interactive map which allows you to see where our hospital is based. As well as this,
                        you will also be able to see the surrounding locations to help you find where we are situated.
                </p></b><br>

                <p>
                    As you can already see on the map, our hospital is based within the city centre.
                    This means that it is easily accessible and easy to find! Despite this, please 
                    <b>only</b> arrive in person if you either:

                        <li>Have an appointment.</li>
                        <li>Need urgent attention in the case of an emergency.</li>
                </p>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2380.1238758426093!2d-1.4682361999999998!3d53.376833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48798283ed55ede5%3A0xeafd77a50b7ce297!2sSheffield%20Hallam%20University!5e0!3m2!1sen!2suk!4v1713835816222!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
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