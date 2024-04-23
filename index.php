<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/global.css" type="text/css"/>

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
        
        <!--pb= padding body -->
        <main role="main" class="pb-5">


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

</body>

</html>