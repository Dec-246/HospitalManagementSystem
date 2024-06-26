<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk awareness</title>
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

        <br><div class="risk">
            <h2>Treatment consent letter</h2><br>
            <br><div class="riskDetials">
                <p>This letter is to inform you (the patient) of the risks
                    and liabilities that you are going to be responsible for
                    if you go through any medical procedure with us. 
                </p>
    
                <p>
                    It is the legal responsibility of ours to make you aware 
                    that you may suffer life-long side affects from any possible surgery
                    or medical process procedure that you may abuot to undergo.
                </p>
    
                <p>
                    Please take time to take full consideration of the impact that it 
                    could leave with you. 
                </p>
    
                <p>
                    To give you more peace-in-mind, our surgery has been rated 5 stars on 
                    trip advisor. We use surgically cleaned utensils and have emplyed trained 
                    professional surgeons who have undergone intense training and examinations.
                </p>
            </div>
        </div><br><br><br>










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